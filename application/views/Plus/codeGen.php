<?php
if (!defined('APP_PATH') && !isset($session)) {
    include_once "application/Account.php";
}

include("application/views/Plus/pmenu.php");

if ($session->access < 9) {
    header('Location: dorf1.php');
    exit();
}

$message = "";
$msg_type = "";

function generateRandomCode($length = 10) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

if (isset($_GET['del'])) {
    $del_id = intval($_GET['del']);
    $database->query("DELETE FROM codes WHERE id = " . $del_id);
    $message = "کد هدیه با موفقیت حذف گردید.";
    $msg_type = "success";
}

$generated_codes = [];
if (isset($_POST['goldAmount']) && isset($_POST['codeNum'])) {
    $goldAmount = intval($_POST['goldAmount']);
    $codeNum = intval($_POST['codeNum']);

    if ($goldAmount > 0 && $codeNum > 0 && $codeNum <= 100) {
        for ($i = 1; $i <= $codeNum; $i++) {
            $code = generateRandomCode(10);
            $database->query("INSERT INTO codes (`codeNum`, `goldAmount`, `isUsed`, `idUser`) VALUES ('" . $code . "', " . $goldAmount . ", 0, 0)");
            $generated_codes[] = $code;
        }
        $message = "تعداد " . $codeNum . " کد هدیه با موفقیت تولید شد.";
        $msg_type = "success";
    } else {
        $message = "مقادیر وارد شده نامعتبر هستند.";
        $msg_type = "danger";
    }
}

$codes = $database->query("SELECT * FROM codes ORDER BY id DESC LIMIT 50");
?>

<style>
.codegen-container {
    direction: rtl;
    text-align: right;
    font-family: Tahoma, Vazir, sans-serif;
    padding: 10px;
}
.codegen-alert {
    padding: 12px;
    margin-bottom: 15px;
    border-radius: 6px;
    font-weight: bold;
}
.codegen-alert-success { background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
.codegen-alert-danger { background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
.codegen-card {
    background: #fff;
    border: 1px solid #cbd5e0;
    border-radius: 8px;
    padding: 15px;
    margin-bottom: 20px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.05);
}
.codegen-form-group {
    margin-bottom: 12px;
}
.codegen-form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #4a5568;
}
.codegen-input {
    width: 100%;
    max-width: 300px;
    padding: 8px;
    border: 1px solid #cbd5e0;
    border-radius: 4px;
    box-sizing: border-box;
}
.codegen-btn {
    background: #3182ce;
    color: white;
    border: none;
    padding: 8px 16px;
    border-radius: 4px;
    font-weight: bold;
    cursor: pointer;
}
.codegen-btn:hover { background: #2b6cb0; }
.codegen-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 15px;
    font-size: 13px;
}
.codegen-table th, .codegen-table td {
    border: 1px solid #cbd5e0;
    padding: 8px;
    text-align: center;
}
.codegen-table th { background: #edf2f7; }
</style>

<div class="codegen-container">
    <?php if (!empty($message)): ?>
        <div class="codegen-alert codegen-alert-<?php echo $msg_type; ?>">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>

    <h2 style="color:#2c3e50; margin-bottom: 15px;">مدیریت و تولید کدهای هدیه طلا</h2>

    <?php if (!empty($generated_codes)): ?>
        <div class="codegen-alert codegen-alert-success" style="direction: ltr; text-align: left; font-family: monospace;">
            <strong>Generated Codes:</strong><br>
            <?php foreach ($generated_codes as $gc): ?>
                <?php echo $gc; ?><br>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <div class="codegen-card">
        <form action="plus.php?id=6" method="post">
            <div class="codegen-form-group">
                <label>تعداد سکه (طلا) هر کد:</label>
                <input name="goldAmount" class="codegen-input" type="number" min="1" value="100" autocomplete="off" required>
            </div>
            <div class="codegen-form-group">
                <label>تعداد کدهای مورد نیاز (حداکثر ۱۰۰):</label>
                <input name="codeNum" class="codegen-input" type="number" min="1" max="100" value="1" autocomplete="off" required>
            </div>
            <button type="submit" class="codegen-btn">تولید کد هدیه</button>
        </form>
    </div>

    <h3 style="color:#2c3e50;">لیست آخرین کدهای هدیه</h3>
    <table class="codegen-table">
        <thead>
            <tr>
                <th>#</th>
                <th>کد</th>
                <th>میزان طلا</th>
                <th>وضعیت</th>
                <th>عملیات</th>
            </tr>
        </thead>
        <tbody>
            <?php if (is_array($codes) && count($codes) > 0): ?>
                <?php foreach ($codes as $c): ?>
                    <tr>
                        <td><?php echo $c['id']; ?></td>
                        <td style="font-family: monospace; font-weight: bold;"><?php echo htmlspecialchars($c['codeNum']); ?></td>
                        <td><?php echo number_format($c['goldAmount']); ?></td>
                        <td><?php echo ($c['isUsed'] ? '<span style="color:red;">مصرف شده</span>' : '<span style="color:green;">فعال</span>'); ?></td>
                        <td>
                            <a href="plus.php?id=6&del=<?php echo $c['id']; ?>" onclick="return confirm('آیا از حذف این کد اطمینان دارید؟');" style="color:#e53e3e; text-decoration:none;">حذف</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">هیچ کد هدیه‌ای ثبت نشده است.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
