<?php
include_once "application/Account.php";

if (!$session->logged_in) {
    header("Location: login.php");
    exit;
}

if (!isset($_POST['package_id']) && !isset($_GET['package_id'])) {
    header("Location: plus.php");
    exit;
}

$package_id = isset($_POST['package_id']) ? intval($_POST['package_id']) : intval($_GET['package_id']);

// Fetch package details
$pack = $database->query("SELECT * FROM packages WHERE id = " . $package_id);
if (!$pack || count($pack) == 0) {
    die("بسته مورد نظر یافت نشد.");
}

$package = $pack[0];
$gold_amount = intval($package['amount']);
$price_toman = floatval($package['price']);
$amount_rial = intval($price_toman * 10); // ZarinPal requires Rials

// Get Merchant ID from DB config or fallback to constant
$merchant_id = "b027468f-bd1d-4d48-9f6d-9038aa9ad46c";
if (defined('ZARINPAL_MERCHANT') && !empty(ZARINPAL_MERCHANT)) {
    $merchant_id = trim(ZARINPAL_MERCHANT);
}
$db_config = $database->query("SELECT * FROM config LIMIT 1");
if (isset($db_config[0]['zarinpal_merchant']) && !empty($db_config[0]['zarinpal_merchant'])) {
    $merchant_id = trim($db_config[0]['zarinpal_merchant']);
}

// Build callback URL
$protocol = ((isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] === 'on' || $_SERVER['HTTPS'] == 1)) || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https')) ? "https" : "http";
$domain = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : "localhost";
$script_path = isset($_SERVER['SCRIPT_NAME']) ? dirname($_SERVER['SCRIPT_NAME']) : "";
$callback_url = rtrim($protocol . "://" . $domain . $script_path, '/') . "/zarinpal_verify.php";

$description = "خرید " . $gold_amount . " سکه تراوین - " . $package['name'];

$data = array(
    "merchant_id" => $merchant_id,
    "amount" => $amount_rial,
    "callback_url" => $callback_url,
    "description" => $description,
    "metadata" => array(
        "email" => $session->email,
        "uid" => $session->uid
    )
);

$jsonData = json_encode($data);
$ch = curl_init('https://api.zarinpal.com/pg/v4/payment/request.json');
curl_setopt($ch, CURLOPT_USERAGENT, 'ZarinPal Rest Api v4');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($jsonData)
));

$result = curl_exec($ch);
$err = curl_error($ch);
curl_close($ch);

if ($err) {
    header("Location: plus.php?status=error&msg=" . urlencode("خطا در ارتباط با زرین‌پال: " . $err));
    exit;
}

$resultData = json_decode($result, true);

if (isset($resultData['data']['code']) && $resultData['data']['code'] == 100) {
    $authority = $resultData['data']['authority'];
    
    // Save transaction info to DB or session
    $_SESSION['zarinpal_pay'] = array(
        'authority' => $authority,
        'package_id' => $package_id,
        'gold' => $gold_amount,
        'amount_toman' => $price_toman,
        'uid' => $session->uid
    );
    
    // Record pending transaction in database (buygold / odemeler)
    $user_ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '127.0.0.1';
    $database->query("INSERT INTO odemeler (`email`, `durum`, `aciklama`, `tip`, `amount`, `anahtar`, `time`, `ip`) 
        VALUES ('" . $database->RemoveXSS($session->email) . "', 'PENDING', '" . $database->RemoveXSS($description) . "', 'zarinpal', " . $gold_amount . ", '" . $authority . "', " . time() . ", '" . $user_ip . "')");

    header('Location: https://www.zarinpal.com/pg/StartPay/' . $authority);
    exit;
} else {
    $error_msg = isset($resultData['errors']['message']) ? $resultData['errors']['message'] : "خطا در ایجاد تراکنش کد: " . (isset($resultData['data']['code']) ? $resultData['data']['code'] : 'Unknown');
    header("Location: plus.php?status=error&msg=" . urlencode($error_msg));
    exit;
}
