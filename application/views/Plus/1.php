<?php
if (!defined('APP_PATH') && !isset($session)) {
    include_once "application/Account.php";
}

include("application/views/Plus/pmenu.php");

// Fetch packages from DB (paketler table)
$packages_list = [];
$res = $database->query("SELECT * FROM paketler ORDER BY id ASC LIMIT 5");
if (is_array($res) && count($res) > 0) {
    $packages_list = $res;
} else {
    // Seed default 5 packages if DB table is empty
    $database->query("INSERT IGNORE INTO `paketler` (`id`, `paketadi`, `fiyat`, `miktar`, `cark`, `tip`) VALUES
    (1, 'بسته برنزی', 25000.00, 50, 0, 'gold'),
    (2, 'بسته نقره‌ای', 50000.00, 120, 0, 'gold'),
    (3, 'بسته طلایی', 100000.00, 300, 0, 'gold'),
    (4, 'بسته الماس', 200000.00, 700, 0, 'gold'),
    (5, 'بسته ویژه VIP', 500000.00, 2000, 0, 'gold')");
    $packages_list = $database->query("SELECT * FROM paketler ORDER BY id ASC LIMIT 5");
}
?>

<style>
.gold-shop-container {
    direction: rtl;
    text-align: right;
    padding: 10px;
    font-family: Tahoma, Vazir, sans-serif;
}
.gold-alert {
    padding: 12px;
    margin-bottom: 15px;
    border-radius: 6px;
    font-weight: bold;
}
.gold-alert-success {
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}
.gold-alert-danger {
    background-color: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
}
.gold-packages-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
    justify-content: center;
    margin-top: 15px;
}
.gold-card {
    background: #fff;
    border: 1px solid #e2e8f0;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.05);
    width: 180px;
    padding: 15px;
    text-align: center;
    transition: transform 0.2s, box-shadow 0.2s;
    position: relative;
    overflow: hidden;
}
.gold-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 15px rgba(0,0,0,0.1);
}
.gold-card-header {
    font-size: 16px;
    font-weight: bold;
    color: #2d3748;
    margin-bottom: 8px;
}
.gold-amount-badge {
    font-size: 22px;
    font-weight: bold;
    color: #d69e2e;
    margin: 10px 0;
}
.gold-amount-badge img {
    vertical-align: middle;
    width: 20px;
    height: 20px;
}
.gold-price {
    font-size: 15px;
    font-weight: bold;
    color: #38a169;
    margin-bottom: 12px;
}
.gold-buy-btn {
    background: linear-gradient(135deg, #3182ce, #2b6cb0);
    color: #fff !important;
    border: none;
    padding: 8px 16px;
    border-radius: 6px;
    cursor: pointer;
    font-weight: bold;
    width: 100%;
    display: block;
    text-decoration: none;
    box-sizing: border-box;
}
.gold-buy-btn:hover {
    background: linear-gradient(135deg, #2b6cb0, #2c5282);
}
.zarinpal-logo {
    margin-top: 20px;
    text-align: center;
    font-size: 12px;
    color: #718096;
}
</style>

<div class="gold-shop-container">
    <?php if (isset($_GET['status']) && $_GET['status'] == 'success'): ?>
        <div class="gold-alert gold-alert-success">
            ✓ پرداخت با موفقیت انجام شد! حساب شما به میزان <strong><?php echo isset($_GET['gold']) ? intval($_GET['gold']) : 0; ?></strong> سکه شارژ گردید. (کد پیگیری: <?php echo isset($_GET['refid']) ? htmlspecialchars($_GET['refid']) : ''; ?>)
        </div>
    <?php elseif (isset($_GET['status']) && $_GET['status'] == 'cancel'): ?>
        <div class="gold-alert gold-alert-danger">
            ✕ پرداخت توسط کاربر لغو شد یا با خطا مواجه گردید.
        </div>
    <?php elseif (isset($_GET['status']) && $_GET['status'] == 'error'): ?>
        <div class="gold-alert gold-alert-danger">
            ✕ خطا در تایید پرداخت: <?php echo isset($_GET['msg']) ? htmlspecialchars($_GET['msg']) : 'مشکلی پیش آمد.'; ?>
        </div>
    <?php endif; ?>

    <h2 style="text-align:center; color:#2c3e50; margin-bottom: 5px;">خرید آنلاین سکه (طلا)</h2>
    <p style="text-align:center; color:#7f8c8d; font-size:13px;">بسته مورد نظر خود را انتخاب کرده و از طریق درگاه امن زرین‌پال پرداخت کنید.</p>

    <div class="gold-packages-grid">
        <?php foreach ($packages_list as $pack): ?>
            <div class="gold-card">
                <div class="gold-card-header"><?php echo htmlspecialchars($pack['paketadi']); ?></div>
                <div class="gold-amount-badge">
                    <?php echo number_format($pack['miktar']); ?>
                    <img src="gpack/lang/en/gui/gold.gif" alt="سکه" title="سکه">
                </div>
                <div class="gold-price"><?php echo number_format($pack['fiyat']); ?> تومان</div>
                <form action="zarinpal.php" method="POST">
                    <input type="hidden" name="package_id" value="<?php echo $pack['id']; ?>">
                    <button type="submit" class="gold-buy-btn">پرداخت و خرید</button>
                </form>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="zarinpal-logo">
        <p>🔒 پرداخت امن متصل به درگاه شاخس زرین‌پال (ZarinPal)</p>
    </div>
</div>
