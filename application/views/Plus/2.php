<?php
if (!defined('APP_PATH') && !isset($session)) {
    include_once "application/Account.php";
}

include("application/views/Plus/pmenu.php");

$message = "";
$msg_type = "";

// Handle Troop / Animal Purchase Form Submission
if (isset($_POST['buy_type'])) {
    $buy_type = trim($_POST['buy_type']);
    $unit_id = intval($_POST['unit_id']);
    $qty = intval($_POST['qty']);
    $cost = intval($_POST['cost']);
    $vref = $village->wid;

    if ($qty <= 0 || $cost <= 0 || $unit_id <= 0) {
        $message = "اطلاعات ورودی معتبر نیست.";
        $msg_type = "danger";
    } else if ($session->gold < $cost) {
        $message = "موجودی سکه (طلا) شما کافی نیست! موجودی فعلی: " . $session->gold . " سکه.";
        $msg_type = "danger";
    } else {
        // Valid unit range check
        // Troops: u1-u30, Animals: u31-u40
        $is_valid = false;
        if ($buy_type === 'troop' && $unit_id >= 1 && $unit_id <= 30) {
            $is_valid = true;
        } else if ($buy_type === 'animal' && $unit_id >= 31 && $unit_id <= 40) {
            $is_valid = true;
        }

        if (!$is_valid) {
            $message = "واحد انتخابی نامعتبر است.";
            $msg_type = "danger";
        } else {
            // Deduct Gold from User
            $database->query("UPDATE users SET gold = gold - " . $cost . " WHERE id = " . intval($session->uid));
            $session->gold -= $cost;

            // Check if village units record exists
            $check_unit = $database->query("SELECT vref FROM units WHERE vref = " . intval($vref));
            if (!$check_unit || count($check_unit) == 0) {
                $database->query("INSERT INTO units (`vref`, `u" . $unit_id . "`) VALUES (" . intval($vref) . ", " . $qty . ")");
            } else {
                $database->query("UPDATE units SET `u" . $unit_id . "` = `u" . $unit_id . "` + " . $qty . " WHERE vref = " . intval($vref));
            }

            $type_label = ($buy_type === 'troop') ? 'نیرو' : 'حیوان';
            $message = "با موفقیت تعداد " . number_format($qty) . " " . $type_label . " خریدم شد و به دهکده (" . htmlspecialchars($village->vname) . ") اضافه گردید. کسر شده: " . $cost . " سکه.";
            $msg_type = "success";
        }
    }
}

// Define Troop mapping based on Tribe
$tribe = intval($session->tribe);
$troops_data = [];

if ($tribe == 1) { // Romans
    $troops_data = [
        1 => ['name' => 'سرباز پیاده (Legionnaire)', 'u' => 1, 'img' => 'u1.gif'],
        2 => ['name' => 'محافظ (Praetorian)', 'u' => 2, 'img' => 'u2.gif'],
        3 => ['name' => 'شمشیردار (Imperian)', 'u' => 3, 'img' => 'u3.gif'],
        4 => ['name' => 'ردیاب (Equites Legati)', 'u' => 4, 'img' => 'u4.gif'],
        5 => ['name' => 'شوالیه معمولی (Equites Imperatoris)', 'u' => 5, 'img' => 'u5.gif'],
        6 => ['name' => 'شوالیه سنگین (Equites Caesaris)', 'u' => 6, 'img' => 'u6.gif'],
        7 => ['name' => 'دژکوب (Ram)', 'u' => 7, 'img' => 'u7.gif'],
        8 => ['name' => 'منجنیق آتشین (Fire Catapult)', 'u' => 8, 'img' => 'u8.gif'],
    ];
} else if ($tribe == 2) { // Teutons
    $troops_data = [
        11 => ['name' => 'گرزدار (Clubswinger)', 'u' => 11, 'img' => 'u11.gif'],
        12 => ['name' => 'نیزه‌دار (Spearman)', 'u' => 12, 'img' => 'u12.gif'],
        13 => ['name' => 'تبرزن (Axeman)', 'u' => 13, 'img' => 'u13.gif'],
        14 => ['name' => 'جاسوس (Scout)', 'u' => 14, 'img' => 'u14.gif'],
        15 => ['name' => 'دلاور (Paladin)', 'u' => 15, 'img' => 'u15.gif'],
        16 => ['name' => 'شوالیه توتون (Teutonic Knight)', 'u' => 16, 'img' => 'u16.gif'],
        17 => ['name' => 'دژکوب (Ram)', 'u' => 17, 'img' => 'u17.gif'],
        18 => ['name' => 'منجنیق (Catapult)', 'u' => 18, 'img' => 'u18.gif'],
    ];
} else if ($tribe == 3) { // Gauls
    $troops_data = [
        21 => ['name' => 'فالانکس (Phalanx)', 'u' => 21, 'img' => 'u21.gif'],
        22 => ['name' => 'شمشیرزن (Swordsman)', 'u' => 22, 'img' => 'u22.gif'],
        23 => ['name' => 'ردیاب (Pathfinder)', 'u' => 23, 'img' => 'u23.gif'],
        24 => ['name' => 'رعد توتاتس (Theutates Thunder)', 'u' => 24, 'img' => 'u24.gif'],
        25 => ['name' => 'شوالیه دروید (Druidrider)', 'u' => 25, 'img' => 'u25.gif'],
        26 => ['name' => 'حاکم (Haeduan)', 'u' => 26, 'img' => 'u26.gif'],
        27 => ['name' => 'دژکوب (Ram)', 'u' => 27, 'img' => 'u27.gif'],
        28 => ['name' => 'منجنیق (Trebuchet)', 'u' => 28, 'img' => 'u28.gif'],
    ];
} else {
    // Default fallback (Romans)
    $troops_data = [
        1 => ['name' => 'سرباز پیاده', 'u' => 1, 'img' => 'u1.gif'],
        2 => ['name' => 'محافظ', 'u' => 2, 'img' => 'u2.gif'],
        3 => ['name' => 'شمشیردار', 'u' => 3, 'img' => 'u3.gif'],
        4 => ['name' => 'ردیاب', 'u' => 4, 'img' => 'u4.gif'],
        5 => ['name' => 'شوالیه', 'u' => 5, 'img' => 'u5.gif'],
    ];
}

// Animals Data
$animals_data = [
    31 => ['name' => 'موش (Rat)', 'u' => 31, 'img' => 'u31.gif'],
    32 => ['name' => 'عنکبوت (Spider)', 'u' => 32, 'img' => 'u32.gif'],
    33 => ['name' => 'مار (Snake)', 'u' => 33, 'img' => 'u33.gif'],
    34 => ['name' => 'خفاش (Bat)', 'u' => 34, 'img' => 'u34.gif'],
    35 => ['name' => 'گراز (Wild Boar)', 'u' => 35, 'img' => 'u35.gif'],
    36 => ['name' => 'گرگ (Wolf)', 'u' => 36, 'img' => 'u36.gif'],
    37 => ['name' => 'خرس (Bear)', 'u' => 37, 'img' => 'u37.gif'],
    38 => ['name' => 'تمساح (Crocodile)', 'u' => 38, 'img' => 'u38.gif'],
    39 => ['name' => 'ببر (Tiger)', 'u' => 39, 'img' => 'u39.gif'],
    40 => ['name' => 'فیل (Elephant)', 'u' => 40, 'img' => 'u40.gif'],
];

// Package tiers for selection
$troop_packages = [
    ['qty' => 100, 'cost' => 20],
    ['qty' => 500, 'cost' => 75],
    ['qty' => 1000, 'cost' => 130],
    ['qty' => 5000, 'cost' => 500],
];

$animal_packages = [
    ['qty' => 50, 'cost' => 15],
    ['qty' => 200, 'cost' => 50],
    ['qty' => 500, 'cost' => 100],
    ['qty' => 1000, 'cost' => 180],
];
?>

<style>
.shop-section-container {
    direction: rtl;
    text-align: right;
    font-family: Tahoma, Vazir, sans-serif;
    padding: 10px;
}
.alert-box {
    padding: 12px;
    margin-bottom: 15px;
    border-radius: 6px;
    font-weight: bold;
}
.alert-box-success { background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
.alert-box-danger { background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }

.section-title {
    font-size: 18px;
    font-weight: bold;
    color: #2b6cb0;
    margin: 20px 0 10px 0;
    border-bottom: 2px solid #e2e8f0;
    padding-bottom: 5px;
}

.item-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 15px;
    margin-bottom: 25px;
}

.item-card {
    background: #fff;
    border: 1px solid #cbd5e0;
    border-radius: 8px;
    padding: 12px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.05);
}

.item-card-header {
    display: flex;
    align-items: center;
    gap: 10px;
    font-weight: bold;
    font-size: 15px;
    color: #2d3748;
    margin-bottom: 10px;
}

.item-card-header img {
    width: 24px;
    height: 24px;
}

.pack-select-form {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.pack-select-form select {
    padding: 6px 10px;
    border: 1px solid #cbd5e0;
    border-radius: 4px;
    font-size: 13px;
}

.buy-btn-submit {
    background: #38a169;
    color: white;
    border: none;
    padding: 8px;
    border-radius: 4px;
    font-weight: bold;
    cursor: pointer;
    transition: background 0.2s;
}
.buy-btn-submit:hover {
    background: #2f855a;
}
</style>

<div class="shop-section-container">
    <?php if (!empty($message)): ?>
        <div class="alert-box alert-box-<?php echo $msg_type; ?>">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>

    <div style="background: #edf2f7; padding: 10px; border-radius: 6px; margin-bottom: 15px;">
        موجودی طلا (سکه) شما: <strong><?php echo number_format($session->gold); ?></strong>
        <img src="gpack/lang/en/gui/gold.gif" style="vertical-align:middle;">
        | دهکده فعلی: <strong><?php echo htmlspecialchars($village->vname); ?></strong>
    </div>

    <!-- 1. BUY TROOPS SECTION -->
    <div class="section-title">⚔️ خرید نیروهای رزمی (مخصوص نژاد شما)</div>
    <p style="font-size: 12px; color: #718096; margin-bottom: 12px;">
        نیروهای خریداری شده مستقیماً به نیروهای دهکده فعال شما اضافه شده و قابلیت حمله، غارت و دفاع را مطابق قوانین استاندارد بازی دارند.
    </p>

    <div class="item-grid">
        <?php foreach ($troops_data as $u_id => $u_info): ?>
            <div class="item-card">
                <div class="item-card-header">
                    <img src="img/un/u/<?php echo $u_info['img']; ?>" alt="<?php echo htmlspecialchars($u_info['name']); ?>" onerror="this.src='img/x.gif'">
                    <span><?php echo htmlspecialchars($u_info['name']); ?></span>
                </div>
                <form method="POST" action="" class="pack-select-form">
                    <input type="hidden" name="buy_type" value="troop">
                    <input type="hidden" name="unit_id" value="<?php echo $u_id; ?>">
                    
                    <select name="pack_index" onchange="
                        var selected = this.options[this.selectedIndex];
                        this.form.qty.value = selected.getAttribute('data-qty');
                        this.form.cost.value = selected.getAttribute('data-cost');
                    ">
                        <?php foreach ($troop_packages as $idx => $p): ?>
                            <option value="<?php echo $idx; ?>" data-qty="<?php echo $p['qty']; ?>" data-cost="<?php echo $p['cost']; ?>">
                                <?php echo number_format($p['qty']); ?> عدد = <?php echo $p['cost']; ?> سکه
                            </option>
                        <?php endforeach; ?>
                    </select>

                    <input type="hidden" name="qty" value="<?php echo $troop_packages[0]['qty']; ?>">
                    <input type="hidden" name="cost" value="<?php echo $troop_packages[0]['cost']; ?>">

                    <button type="submit" class="buy-btn-submit">خرید نیرو</button>
                </form>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- 2. BUY ANIMALS SECTION -->
    <div class="section-title">🐘 خرید حیوانات طبیعت (جهت دفاع دهکده)</div>
    <p style="font-size: 12px; color: #718096; margin-bottom: 12px;">
        حیوانات طبیعت در دهکده مستقر شده و قدرتمندترین دفاع را برای دهکده شما فراهم می‌کنند. (حیوانات قابل ارسال به حمله نمی‌باشند).
    </p>

    <div class="item-grid">
        <?php foreach ($animals_data as $u_id => $u_info): ?>
            <div class="item-card">
                <div class="item-card-header">
                    <img src="img/un/u/<?php echo $u_info['img']; ?>" alt="<?php echo htmlspecialchars($u_info['name']); ?>" onerror="this.src='img/x.gif'">
                    <span><?php echo htmlspecialchars($u_info['name']); ?></span>
                </div>
                <form method="POST" action="" class="pack-select-form">
                    <input type="hidden" name="buy_type" value="animal">
                    <input type="hidden" name="unit_id" value="<?php echo $u_id; ?>">
                    
                    <select name="pack_index" onchange="
                        var selected = this.options[this.selectedIndex];
                        this.form.qty.value = selected.getAttribute('data-qty');
                        this.form.cost.value = selected.getAttribute('data-cost');
                    ">
                        <?php foreach ($animal_packages as $idx => $p): ?>
                            <option value="<?php echo $idx; ?>" data-qty="<?php echo $p['qty']; ?>" data-cost="<?php echo $p['cost']; ?>">
                                <?php echo number_format($p['qty']); ?> عدد = <?php echo $p['cost']; ?> سکه
                            </option>
                        <?php endforeach; ?>
                    </select>

                    <input type="hidden" name="qty" value="<?php echo $animal_packages[0]['qty']; ?>">
                    <input type="hidden" name="cost" value="<?php echo $animal_packages[0]['cost']; ?>">

                    <button type="submit" class="buy-btn-submit">خرید حیوان دفاعی</button>
                </form>
            </div>
        <?php endforeach; ?>
    </div>
</div>
