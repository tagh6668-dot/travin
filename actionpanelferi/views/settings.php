<?php
if (!defined('APP_PATH') && !isset($session)) {
    include_once "../../application/Account.php";
}

if ($session->access < 9) {
    die("دسترسی غیرمجاز");
}

$msg = "";
$msg_type = "";

// Handle Settings Form Update
if (isset($_POST['update_settings'])) {
    $finish_all_cost = intval($_POST['finish_all_cost']);
    $zarinpal_merchant = trim($_POST['zarinpal_merchant']);
    $default_gold = intval($_POST['default_gold']);
    $server_name = $database->RemoveXSS($_POST['server_name']);

    // Check if columns exist or add them
    @$database->query("ALTER TABLE config ADD COLUMN IF NOT EXISTS FINISH_ALL_COST int(11) NOT NULL DEFAULT '30'");
    @$database->query("ALTER TABLE config ADD COLUMN IF NOT EXISTS zarinpal_merchant varchar(100) NOT NULL DEFAULT 'b027468f-bd1d-4d48-9f6d-9038aa9ad46c'");

    $database->query("UPDATE config SET 
        FINISH_ALL_COST = " . $finish_all_cost . ", 
        zarinpal_merchant = '" . $database->RemoveXSS($zarinpal_merchant) . "', 
        DEFAULT_GOLD = " . $default_gold . ", 
        SERVER_NAME = '" . $server_name . "'");

    $msg = "تنظیمات با موفقیت بروزرسانی شد!";
    $msg_type = "success";
}

// Handle Package Update
if (isset($_POST['update_package'])) {
    $pack_id = intval($_POST['pack_id']);
    $pack_name = $database->RemoveXSS($_POST['pack_name']);
    $pack_price = floatval($_POST['pack_price']);
    $pack_gold = intval($_POST['pack_gold']);

    $database->query("UPDATE packages SET name = '" . $pack_name . "', price = " . $pack_price . ", amount = " . $pack_gold . " WHERE id = " . $pack_id);
    $msg = "بسته سکه شماره " . $pack_id . " با موفقیت ویرایش شد!";
    $msg_type = "success";
}

// Fetch Current Config
$config_data = $database->query("SELECT * FROM config LIMIT 1");
$cfg = isset($config_data[0]) ? $config_data[0] : [];

$finish_cost = isset($cfg['FINISH_ALL_COST']) ? $cfg['FINISH_ALL_COST'] : 30;
$merchant_id = isset($cfg['zarinpal_merchant']) ? $cfg['zarinpal_merchant'] : 'b027468f-bd1d-4d48-9f6d-9038aa9ad46c';
$def_gold = isset($cfg['DEFAULT_GOLD']) ? $cfg['DEFAULT_GOLD'] : 100;
$srv_name = isset($cfg['SERVER_NAME']) ? $cfg['SERVER_NAME'] : 'تراوین';

// Fetch Packages
$packages = $database->query("SELECT * FROM packages ORDER BY id ASC LIMIT 10");
?>

<div class="card" style="direction: rtl; text-align: right; font-family: Tahoma, sans-serif;">
    <div class="card-header" style="background: #2b6cb0; color: white; font-weight: bold; padding: 12px;">
        ⚙️ تنظیمات متمرکز سرور و قیمت سکه‌ها
    </div>
    <div class="card-body" style="padding: 20px;">

        <?php if (!empty($msg)): ?>
            <div class="alert alert-<?php echo $msg_type; ?>" style="padding: 10px; margin-bottom: 15px; border-radius: 5px; background: #d4edda; color: #155724;">
                <?php echo $msg; ?>
            </div>
        <?php endif; ?>

        <form action="" method="POST">
            <input type="hidden" name="update_settings" value="1">
            <h4 style="color: #2c3e50; border-bottom: 1px solid #cbd5e0; padding-bottom: 5px;">۱. تنظیمات عمومی و قیمت خدمات سکه</h4>
            
            <div class="form-group" style="margin-bottom: 15px;">
                <label>نام سرور:</label>
                <input type="text" name="server_name" class="form-control" value="<?php echo htmlspecialchars($srv_name); ?>" required>
            </div>

            <div class="form-group" style="margin-bottom: 15px;">
                <label>هزینه سکه برای ⚡ تربیت فوری سربازها (Instant Troop Training Cost):</label>
                <input type="number" name="finish_all_cost" class="form-control" value="<?php echo $finish_cost; ?>" required>
                <small style="color: #718096;">تعداد سکه مورد نیاز جهت پایان فوری ساخت نیروها در پادگان/اصطبل/کارگاه (پیش‌فرض: 30)</small>
            </div>

            <div class="form-group" style="margin-bottom: 15px;">
                <label>مرچنت آیدی درگاه زرین‌پال (ZarinPal Merchant ID):</label>
                <input type="text" name="zarinpal_merchant" class="form-control" value="<?php echo htmlspecialchars($merchant_id); ?>" required>
            </div>

            <div class="form-group" style="margin-bottom: 15px;">
                <label>مقدار طلای اولیه ثبت نام:</label>
                <input type="number" name="default_gold" class="form-control" value="<?php echo $def_gold; ?>" required>
            </div>

            <button type="submit" class="btn btn-primary" style="background: #3182ce; color: white; border: none; padding: 8px 20px; border-radius: 5px; cursor: pointer;">ذخیره تنظیمات اصلی</button>
        </form>

        <hr style="margin: 30px 0;">

        <h4 style="color: #2c3e50; border-bottom: 1px solid #cbd5e0; padding-bottom: 5px;">۲. مدیریت و تغییر تعرفه ۵ بسته سکه</h4>
        <p style="font-size: 13px; color: #718096;">در این جدول می‌توانید قیمت‌ها و تعداد سکه‌های بسته‌های خرید آنلاین را تغییر دهید.</p>

        <table class="table table-bordered" style="width: 100%; border-collapse: collapse; margin-top: 15px;">
            <thead>
                <tr style="background: #edf2f7;">
                    <th style="padding: 8px; border: 1px solid #cbd5e0;">#</th>
                    <th style="padding: 8px; border: 1px solid #cbd5e0;">نام بسته</th>
                    <th style="padding: 8px; border: 1px solid #cbd5e0;">قیمت (تومان)</th>
                    <th style="padding: 8px; border: 1px solid #cbd5e0;">تعداد سکه</th>
                    <th style="padding: 8px; border: 1px solid #cbd5e0;">عملیات</th>
                </tr>
            </thead>
            <tbody>
                <?php if (is_array($packages) && count($packages) > 0): ?>
                    <?php foreach ($packages as $p): ?>
                        <tr>
                            <form action="" method="POST">
                                <input type="hidden" name="update_package" value="1">
                                <input type="hidden" name="pack_id" value="<?php echo $p['id']; ?>">
                                <td style="padding: 8px; border: 1px solid #cbd5e0;"><?php echo $p['id']; ?></td>
                                <td style="padding: 8px; border: 1px solid #cbd5e0;">
                                    <input type="text" name="pack_name" value="<?php echo htmlspecialchars($p['name']); ?>" style="width: 90%;">
                                </td>
                                <td style="padding: 8px; border: 1px solid #cbd5e0;">
                                    <input type="number" name="pack_price" value="<?php echo $p['price']; ?>" style="width: 90%;">
                                </td>
                                <td style="padding: 8px; border: 1px solid #cbd5e0;">
                                    <input type="number" name="pack_gold" value="<?php echo $p['amount']; ?>" style="width: 90%;">
                                </td>
                                <td style="padding: 8px; border: 1px solid #cbd5e0;">
                                    <button type="submit" class="btn btn-sm btn-success" style="background: #38a169; color: white; border: none; padding: 4px 10px; border-radius: 4px; cursor: pointer;">ذخیره تغییرات</button>
                                </td>
                            </form>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>

    </div>
</div>
