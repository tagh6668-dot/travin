<?php
include_once "application/Account.php";

$authority = isset($_GET['Authority']) ? trim($_GET['Authority']) : '';
$status = isset($_GET['Status']) ? trim($_GET['Status']) : '';

if (empty($authority)) {
    header("Location: plus.php?status=error&msg=" . urlencode("کد شناسه تراکنش معتبر نیست."));
    exit;
}

if ($status !== 'OK') {
    // Payment cancelled by user
    $database->query("UPDATE odemeler SET durum = 'CANCELLED' WHERE anahtar = '" . $database->RemoveXSS($authority) . "'");
    header("Location: plus.php?status=cancel");
    exit;
}

// Retrieve pending payment record from database
$pay_record = $database->query("SELECT * FROM odemeler WHERE anahtar = '" . $database->RemoveXSS($authority) . "'");
if (!$pay_record || count($pay_record) == 0) {
    // Try from session fallback
    if (isset($_SESSION['zarinpal_pay']) && $_SESSION['zarinpal_pay']['authority'] == $authority) {
        $gold_amount = $_SESSION['zarinpal_pay']['gold'];
        $price_toman = $_SESSION['zarinpal_pay']['amount_toman'];
        $uid = $_SESSION['zarinpal_pay']['uid'];
    } else {
        header("Location: plus.php?status=error&msg=" . urlencode("تراکنش در سیستم یافت نشد."));
        exit;
    }
} else {
    $rec = $pay_record[0];
    if ($rec['durum'] === 'SUCCESS') {
        header("Location: plus.php?status=success&gold=" . $rec['amount'] . "&refid=" . urlencode($authority));
        exit;
    }
    $gold_amount = intval($rec['amount']);
    
    // Prioritize logged-in session user ID, otherwise lookup by recorded email
    if (isset($session->uid) && $session->uid > 0) {
        $uid = $session->uid;
        $username = $session->username;
    } else {
        $user_res = $database->query("SELECT id, username FROM users WHERE email = '" . $database->RemoveXSS($rec['email']) . "' LIMIT 1");
        if ($user_res && count($user_res) > 0) {
            $uid = $user_res[0]['id'];
            $username = $user_res[0]['username'];
        } else {
            $uid = 0;
            $username = '';
        }
    }
}

// Calculate amount in Rials
$amount_rial = 0;
if (isset($_SESSION['zarinpal_pay']['amount_toman'])) {
    $amount_rial = intval($_SESSION['zarinpal_pay']['amount_toman'] * 10);
} else {
    $pack_res = $database->query("SELECT price FROM packages WHERE amount = " . intval($gold_amount) . " LIMIT 1");
    if ($pack_res && count($pack_res) > 0) {
        $amount_rial = intval(floatval($pack_res[0]['price']) * 10);
    }
}
if ($amount_rial <= 0) {
    $amount_rial = intval($gold_amount * 1000 * 10);
}

// Get Merchant ID
$merchant_id = "b027468f-bd1d-4d48-9f6d-9038aa9ad46c";
$db_config = $database->query("SELECT * FROM config LIMIT 1");
if (isset($db_config[0]['zarinpal_merchant']) && !empty($db_config[0]['zarinpal_merchant'])) {
    $merchant_id = trim($db_config[0]['zarinpal_merchant']);
}

$data = array(
    "merchant_id" => $merchant_id,
    "authority" => $authority,
    "amount" => $amount_rial
);

$jsonData = json_encode($data);
$ch = curl_init('https://api.zarinpal.com/pg/v4/payment/verify.json');
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
    header("Location: plus.php?status=error&msg=" . urlencode("خطا در تایید تراکنش: " . $err));
    exit;
}

$resultData = json_decode($result, true);

if (isset($resultData['data']['code']) && ($resultData['data']['code'] == 100 || $resultData['data']['code'] == 101)) {
    $ref_id = $resultData['data']['ref_id'];
    
    // Credit gold to user
    if ($uid > 0 && $gold_amount > 0) {
        $database->query("UPDATE users SET gold = gold + " . $gold_amount . " WHERE id = " . intval($uid));
        
        if (isset($session) && isset($session->uid) && $session->uid == $uid) {
            $session->gold += $gold_amount;
        }
        
        // Update payment record in database
        $database->query("UPDATE odemeler SET durum = 'SUCCESS', aciklama = 'RefID: " . $ref_id . "' WHERE anahtar = '" . $database->RemoveXSS($authority) . "'");
        
        // Record in payments table if exists
        $user_email = isset($rec['email']) ? $rec['email'] : (isset($session->email) ? $session->email : '');
        $database->query("INSERT INTO buygold (`email`, `tarif`, `gold`, `time`, `ip`, `status`) 
            VALUES ('" . $database->RemoveXSS($user_email) . "', 'Z', " . $gold_amount . ", " . time() . ", '" . $_SERVER['REMOTE_ADDR'] . "', 1)");

        // Send in-game confirmation message to user
        $msg_title = "شارژ حساب (خرید سکه)";
        $msg_body = "با تشکر، حساب شما با موفقیت به میزان " . number_format($gold_amount) . " سکه شارژ گردید.\nکد پیگیری تراکنش زرین‌پال: " . $ref_id;
        $database->sendMessage($uid, 6, $msg_title, $msg_body, 0, 0, 0, 0);
    }
    
    unset($_SESSION['zarinpal_pay']);
    header("Location: plus.php?status=success&gold=" . $gold_amount . "&refid=" . urlencode($ref_id));
    exit;
} else {
    $error_code = isset($resultData['errors']['code']) ? $resultData['errors']['code'] : (isset($resultData['data']['code']) ? $resultData['data']['code'] : 'Unknown');
    $error_msg = isset($resultData['errors']['message']) ? $resultData['errors']['message'] : "تراکنش توسط زرین‌پال تایید نشد (کد: " . $error_code . ")";
    
    $database->query("UPDATE odemeler SET durum = 'FAILED' WHERE anahtar = '" . $database->RemoveXSS($authority) . "'");
    header("Location: plus.php?status=error&msg=" . urlencode($error_msg));
    exit;
}
