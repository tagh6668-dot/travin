<?php
if (!defined('APP_PATH') && !isset($session)) {
    include_once "application/Account.php";
}

include("application/views/Plus/pmenu.php");

$message = "";
$msg_type = "";

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

// Handle Troop / Animal Purchase Form Submission
if (isset($_POST['buy_type'])) {
    $buy_type = trim($_POST['buy_type']);
    $unit_id = intval($_POST['unit_id']);
    $vref = intval($village->wid);
    $tribe = intval($session->tribe);

    $qty = isset($_POST['qty']) ? intval($_POST['qty']) : 0;
    $cost = isset($_POST['cost']) ? intval($_POST['cost']) : 0;

    // If pack_select index was passed, use exact tier data for safety
    if (isset($_POST['pack_select'])) {
        $pack_idx = intval($_POST['pack_select']);
        if ($buy_type === 'troop' && isset($troop_packages[$pack_idx])) {
            $qty = $troop_packages[$pack_idx]['qty'];
            $cost = $troop_packages[$pack_idx]['cost'];
        } else if ($buy_type === 'animal' && isset($animal_packages[$pack_idx])) {
            $qty = $animal_packages[$pack_idx]['qty'];
            $cost = $animal_packages[$pack_idx]['cost'];
        }
    }

    // Validate package tier
    $valid_package = false;
    if ($buy_type === 'troop') {
        foreach ($troop_packages as $p) {
            if ($p['qty'] == $qty && $p['cost'] == $cost) {
                $valid_package = true;
                break;
            }
        }
    } else if ($buy_type === 'animal') {
        foreach ($animal_packages as $p) {
            if ($p['qty'] == $qty && $p['cost'] == $cost) {
                $valid_package = true;
                break;
            }
        }
    }

    if (!$valid_package || $qty <= 0 || $cost <= 0 || $unit_id <= 0) {
        $message = "بسته یا اطلاعات ورودی معتبر نیست.";
        $msg_type = "danger";
    } else if ($session->gold < $cost) {
        $message = "موجودی سکه (طلا) شما کافی نیست! موجودی فعلی: " . number_format($session->gold) . " سکه.";
        $msg_type = "danger";
    } else {
        if ($buy_type === 'troop') {
            // Determine column in units table based on tribe (u1 to u8)
            $u_col_num = $unit_id;
            if ($tribe == 2) {
                $u_col_num = $unit_id - 10;
            } else if ($tribe == 3) {
                $u_col_num = $unit_id - 20;
            }

            if ($u_col_num >= 1 && $u_col_num <= 8) {
                $col_name = "u" . $u_col_num;

                // Deduct Gold from User
                $database->query("UPDATE users SET gold = gold - " . $cost . " WHERE id = " . intval($session->uid));
                $session->gold -= $cost;

                // Update units in current village
                $check_unit = $database->query("SELECT vref FROM units WHERE vref = " . $vref);
                if (!$check_unit || count($check_unit) == 0) {
                    $database->query("INSERT INTO units (`vref`, `" . $col_name . "`) VALUES (" . $vref . ", " . $qty . ")");
                } else {
                    $database->query("UPDATE units SET `" . $col_name . "` = `" . $col_name . "` + " . $qty . " WHERE vref = " . $vref);
                }

                $message = "با موفقیت تعداد " . number_format($qty) . " نیرو خریداری شد و به دهکده (" . htmlspecialchars($village->vname) . ") اضافه گردید. کسر شده: " . $cost . " سکه.";
                $msg_type = "success";
            } else {
                $message = "واحد نیروی انتخابی با نژاد شما همخوانی ندارد یا نامعتبر است.";
                $msg_type = "danger";
            }
        } else if ($buy_type === 'animal') {
            // Nature animals: unit_id is 31..40 -> maps to u1..u10 in enforcement (tribe 4 - Nature)
            $animal_col_num = $unit_id - 30;
            if ($animal_col_num >= 1 && $animal_col_num <= 10) {
                $col_name = "u" . $animal_col_num;

                // Deduct Gold from User
                $database->query("UPDATE users SET gold = gold - " . $cost . " WHERE id = " . intval($session->uid));
                $session->gold -= $cost;

                // Find Natureland base village wref if exists for owner 2
                $check_nature_village = $database->query("SELECT wref FROM vdata WHERE owner = 2 LIMIT 1");
                $nature_wref = ($check_nature_village && count($check_nature_village) > 0) ? intval($check_nature_village[0]['wref']) : 0;

                // Deploy nature animals as reinforcements defending the village
                $check_enf = $database->query("SELECT id FROM enforcement WHERE vref = " . $vref . " AND (`from` = " . $nature_wref . " OR `from` = 0) LIMIT 1");
                if ($check_enf && count($check_enf) > 0) {
                    $enf_id = intval($check_enf[0]['id']);
                    $database->query("UPDATE enforcement SET `" . $col_name . "` = `" . $col_name . "` + " . $qty . " WHERE id = " . $enf_id);
                } else {
                    $database->query("INSERT INTO enforcement (`vref`, `from`, `" . $col_name . "`) VALUES (" . $vref . ", " . $nature_wref . ", " . $qty . ")");
                }

                $message = "با موفقیت تعداد " . number_format($qty) . " حیوان دفاعی خریداری شد و در دهکده (" . htmlspecialchars($village->vname) . ") مستقر گردید. کسر شده: " . $cost . " سکه.";
                $msg_type = "success";
            } else {
                $message = "حیوان دفاعی انتخابی نامعتبر است.";
                $msg_type = "danger";
            }
        }
    }
}

// Define Troop mapping based on Tribe
$tribe = intval($session->tribe);
$troops_data = [];

if ($tribe == 1) { // Romans
    $troops_data = [
        1 => ['name' => 'سرباز پیاده (Legionnaire)', 'u' => 1],
        2 => ['name' => 'محافظ (Praetorian)', 'u' => 2],
        3 => ['name' => 'شمشیردار (Imperian)', 'u' => 3],
        4 => ['name' => 'ردیاب (Equites Legati)', 'u' => 4],
        5 => ['name' => 'شوالیه معمولی (Equites Imperatoris)', 'u' => 5],
        6 => ['name' => 'شوالیه سنگین (Equites Caesaris)', 'u' => 6],
        7 => ['name' => 'دژکوب (Ram)', 'u' => 7],
        8 => ['name' => 'منجنیق آتشین (Fire Catapult)', 'u' => 8],
    ];
} else if ($tribe == 2) { // Teutons
    $troops_data = [
        11 => ['name' => 'گررزدار (Clubswinger)', 'u' => 11],
        12 => ['name' => 'نیزه‌دار (Spearman)', 'u' => 12],
        13 => ['name' => 'تبرزن (Axeman)', 'u' => 13],
        14 => ['name' => 'جاسوس (Scout)', 'u' => 14],
        15 => ['name' => 'دلاور (Paladin)', 'u' => 15],
        16 => ['name' => 'شوالیه توتون (Teutonic Knight)', 'u' => 16],
        17 => ['name' => 'دژکوب (Ram)', 'u' => 17],
        18 => ['name' => 'منجنیق (Catapult)', 'u' => 18],
    ];
} else if ($tribe == 3) { // Gauls
    $troops_data = [
        21 => ['name' => 'فالانکس (Phalanx)', 'u' => 21],
        22 => ['name' => 'شمشیرزن (Swordsman)', 'u' => 22],
        23 => ['name' => 'ردیاب (Pathfinder)', 'u' => 23],
        24 => ['name' => 'رعد توتاتس (Theutates Thunder)', 'u' => 24],
        25 => ['name' => 'شوالیه دروید (Druidrider)', 'u' => 25],
        26 => ['name' => 'هردوان (Haeduan)', 'u' => 26],
        27 => ['name' => 'دژکوب (Ram)', 'u' => 27],
        28 => ['name' => 'منجنیق (Trebuchet)', 'u' => 28],
    ];
} else {
    // Default fallback (Romans)
    $troops_data = [
        1 => ['name' => 'سرباز پیاده', 'u' => 1],
        2 => ['name' => 'محافظ', 'u' => 2],
        3 => ['name' => 'شمشیردار', 'u' => 3],
        4 => ['name' => 'ردیاب', 'u' => 4],
        5 => ['name' => 'شوالیه معمولی', 'u' => 5],
        6 => ['name' => 'شوالیه سنگین', 'u' => 6],
        7 => ['name' => 'دژکوب', 'u' => 7],
        8 => ['name' => 'منجنیق آتشین', 'u' => 8],
    ];
}

// Animals Data
$animals_data = [
    31 => ['name' => 'موش (Rat)', 'u' => 31],
    32 => ['name' => 'عنکبوت (Spider)', 'u' => 32],
    33 => ['name' => 'مار (Snake)', 'u' => 33],
    34 => ['name' => 'خفاش (Bat)', 'u' => 34],
    35 => ['name' => 'گراز (Wild Boar)', 'u' => 35],
    36 => ['name' => 'گرگ (Wolf)', 'u' => 36],
    37 => ['name' => 'خرس (Bear)', 'u' => 37],
    38 => ['name' => 'تمساح (Crocodile)', 'u' => 38],
    39 => ['name' => 'ببر (Tiger)', 'u' => 39],
    40 => ['name' => 'فیل (Elephant)', 'u' => 40],
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

.item-card-header img.unit {
    vertical-align: middle;
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
        <div class="alert-box alert-box-<?php echo $msg_type; ?> themsg">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>

    <div style="background: #edf2f7; padding: 10px; border-radius: 6px; margin-bottom: 15px;">
        موجودی طلا (سکه) شما: <strong><?php echo number_format($session->gold); ?></strong>
        <img src="img/admin/gold.gif" style="vertical-align:middle;" alt="طلا" onerror="this.src='gpack/img_rtl/a/gold.gif'">
        | دهکده فعلی: <strong><?php echo htmlspecialchars($village->vname); ?></strong>
    </div>

    <!-- 1. BUY TROOPS SECTION -->
    <div class="section-title">⚔️ خرید نیروهای رزمی (مخصوص نژاد شما)</div>
    <p style="font-size: 12px; color: #718096; margin-bottom: 12px;">
        نیروهای خریداری شده مستقیماً به ارتش دهکده فعال شما افزوده شده و قابلیت ارسال به حمله، غارت و دفاع را دارا هستند.
    </p>

    <div class="item-grid">
        <?php foreach ($troops_data as $u_id => $u_info): ?>
            <div class="item-card">
                <div class="item-card-header">
                    <img class="unit u<?php echo $u_id; ?>" src="img/x.gif" alt="<?php echo htmlspecialchars($u_info['name']); ?>">
                    <span><?php echo htmlspecialchars($u_info['name']); ?></span>
                </div>
                <form method="POST" action="" class="pack-select-form">
                    <input type="hidden" name="buy_type" value="troop">
                    <input type="hidden" name="unit_id" value="<?php echo $u_id; ?>">
                    
                    <select name="pack_select" onchange="
                        var sel = this.options[this.selectedIndex];
                        this.form.qty.value = sel.getAttribute('data-qty');
                        this.form.cost.value = sel.getAttribute('data-cost');
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
    <div class="section-title">🐻 خرید حیوانات طبیعت (جهت دفاع دهکده)</div>
    <p style="font-size: 12px; color: #718096; margin-bottom: 12px;">
        حیوانات طبیعت به عنوان نیروی کمکی در دهکده مستقر شده و دفاع فوق‌العاده‌ای در برابر حملات دشمن ایجاد می‌کنند.
    </p>

    <div class="item-grid">
        <?php foreach ($animals_data as $u_id => $u_info): ?>
            <div class="item-card">
                <div class="item-card-header">
                    <img class="unit u<?php echo $u_id; ?>" src="img/x.gif" alt="<?php echo htmlspecialchars($u_info['name']); ?>">
                    <span><?php echo htmlspecialchars($u_info['name']); ?></span>
                </div>
                <form method="POST" action="" class="pack-select-form">
                    <input type="hidden" name="buy_type" value="animal">
                    <input type="hidden" name="unit_id" value="<?php echo $u_id; ?>">
                    
                    <select name="pack_select" onchange="
                        var sel = this.options[this.selectedIndex];
                        this.form.qty.value = sel.getAttribute('data-qty');
                        this.form.cost.value = sel.getAttribute('data-cost');
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
