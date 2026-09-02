<?php
if (!defined('APP_PATH') && !isset($session)) {
    include_once "application/Account.php";
}

include("application/views/Plus/pmenu.php");

$message = "";
$msg_type = "";

if (isset($_POST['code']) && !empty($_POST['code'])) {
    $code_str = trim($database->RemoveXSS($_POST['code']));
    $Q = $database->query("SELECT * FROM codes WHERE codeNum = '" . $code_str . "' LIMIT 1");

    if ($Q && count($Q) > 0) {
        if ($Q[0]['isUsed']) {
            $message = "این کد هدیه قبلاً استفاده شده است.";
            $msg_type = "danger";
        } else {
            $gold_to_add = intval($Q[0]['goldAmount']);
            $database->query("UPDATE codes SET isUsed = 1, idUser = " . intval($session->uid) . " WHERE id = " . intval($Q[0]['id']));
            $database->modifyGold($session->uid, $gold_to_add, 1);
            if (isset($session->gold)) {
                $session->gold += $gold_to_add;
            }
            $message = "کد هدیه با موفقیت فعال گردید و تعداد " . number_format($gold_to_add) . " سکه (طلا) به حساب شما افزوده شد.";
            $msg_type = "success";
        }
    } else {
        $message = "کد هدیه وارد شده نامعتبر یا اشتباه است.";
        $msg_type = "danger";
    }
}
?>

<style>
.gift-code-container {
    direction: rtl;
    text-align: right;
    font-family: Tahoma, Vazir, sans-serif;
    padding: 10px;
}
.gift-alert {
    padding: 12px;
    margin-bottom: 15px;
    border-radius: 6px;
    font-weight: bold;
}
.gift-alert-success { background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
.gift-alert-danger { background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
.gift-card {
    background: #fff;
    border: 1px solid #cbd5e0;
    border-radius: 8px;
    padding: 20px;
    max-width: 450px;
    margin: 15px auto;
    box-shadow: 0 4px 6px rgba(0,0,0,0.05);
}
.gift-input {
    width: 100%;
    padding: 10px;
    border: 1px solid #cbd5e0;
    border-radius: 6px;
    font-size: 15px;
    direction: ltr;
    text-align: center;
    box-sizing: border-box;
    margin: 12px 0;
    letter-spacing: 2px;
}
.gift-submit-btn {
    background: linear-gradient(135deg, #38a169, #2f855a);
    color: #fff;
    border: none;
    padding: 10px;
    border-radius: 6px;
    font-weight: bold;
    width: 100%;
    font-size: 14px;
    cursor: pointer;
    box-sizing: border-box;
}
.gift-submit-btn:hover {
    background: linear-gradient(135deg, #2f855a, #276749);
}
</style>

<div class="gift-code-container">
    <?php if (!empty($message)): ?>
        <div class="gift-alert gift-alert-<?php echo $msg_type; ?>">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>

    <h2 style="text-align:center; color:#2c3e50; margin-bottom: 5px;">🎁 فعال‌سازی کد هدیه و جایزه</h2>
    <p style="text-align:center; color:#718096; font-size:13px;">اگر کد هدیه دریافت کرده‌اید، آن را در کادر زیر وارد کنید تا سکه‌های طلا به اکانت شما اضافه شود.</p>

    <div class="gift-card">
        <form action="" method="post">
            <label style="font-weight:bold; color:#4a5568;">کد هدیه ۱۰ رقمی:</label>
            <input name="code" type="text" class="gift-input" placeholder="مثال: A1B2C3D4E5" autocomplete="off" required>
            <button type="submit" class="gift-submit-btn">ثبت و دریافت سکه طلا</button>
        </form>
    </div>
</div>
