<?php
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);

if (file_exists("../application/config.php") && !isset($_POST['subconst'])) {
    include_once("../application/config.php");
    include_once("../application/Database/db_MYSQL.php");
}

class Process {

    function __construct() {
        if (isset($_POST['subconst'])) {
            $this->constForm();
        } else if (isset($_POST['substruc'])) {
            $this->createStruc();
        } else if (isset($_POST['subwdata'])) {
            $this->createWdata();
        } else {
            header("Location: index.php");
        }
    }

    private function parseDateToTimestamp($input, $fallback_offset = 0) {
        if (empty($input)) {
            return time() + $fallback_offset;
        }
        if (is_numeric($input)) {
            return intval($input);
        }
        $ts = strtotime($input);
        return ($ts !== false) ? $ts : (time() + $fallback_offset);
    }

    function constForm() {
        // Parse Timestamps from human-readable inputs or direct timestamp inputs
        $opening = $this->parseDateToTimestamp(isset($_POST['opening_date']) ? $_POST['opening_date'] : (isset($_POST['opening']) ? $_POST['opening'] : ''), 0);
        $artefacts = $this->parseDateToTimestamp(isset($_POST['ARTEFACTS_date']) ? $_POST['ARTEFACTS_date'] : (isset($_POST['ARTEFACTS']) ? $_POST['ARTEFACTS'] : ''), 86400 * 3);
        $ww_time = $this->parseDateToTimestamp(isset($_POST['WW_TIME_date']) ? $_POST['WW_TIME_date'] : (isset($_POST['WW_TIME']) ? $_POST['WW_TIME'] : ''), 86400 * 5);
        $ww_plan = $this->parseDateToTimestamp(isset($_POST['WW_PLAN_date']) ? $_POST['WW_PLAN_date'] : (isset($_POST['WW_PLAN']) ? $_POST['WW_PLAN'] : ''), 86400 * 6);

        // Generate per-server config file inside ../application/config.php
        $myFile = "../application/config.php";
        $fh = fopen($myFile, 'w') or die("<br/><br/><br/>خطا: عدم توانایی در ایجاد فایل application/config.php");

        $tpl_path = "data/constant_format.tpl";
        $text = file_exists($tpl_path) ? file_get_contents($tpl_path) : "";

        if (empty($text)) {
            die("خطا: فایل داده data/constant_format.tpl پیدا نشد.");
        }

        $text = preg_replace("'%SSERVER%'", $_POST['sserver'], $text);
        $text = preg_replace("'%SUSER%'", $_POST['suser'], $text);
        $text = preg_replace("'%SPASS%'", $_POST['spass'], $text);
        $text = preg_replace("'%SDB%'", $_POST['sdb'], $text);
        $text = preg_replace("'%ARANK%'", isset($_POST['admin_rank']) ? $_POST['admin_rank'] : 'True', $text);
        $text = preg_replace("'%DEMOLISH%'", isset($_POST['demolish']) ? $_POST['demolish'] : '5', $text);
        $text = preg_replace("'%VILLAGE_EXPAND%'", isset($_POST['village_expand']) ? $_POST['village_expand'] : '1', $text);
        $text = preg_replace("'%TS_THRESHOLD%'", isset($_POST['ts_threshold']) ? $_POST['ts_threshold'] : '20', $text);
        $text = preg_replace("'%MAX_FILES%'", isset($_POST['MAX_FILES']) ? $_POST['MAX_FILES'] : '1000', $text);
        $text = preg_replace("'%MAX_FILESH%'", isset($_POST['MAX_FILESH']) ? $_POST['MAX_FILESH'] : '3000', $text);
        $text = preg_replace("'%IMGQUALITY%'", isset($_POST['IMGQUALITY']) ? $_POST['IMGQUALITY'] : '99', $text);
        $text = preg_replace("'%MOMENT_TRAIN%'", isset($_POST['MOMENT_TRAIN']) ? $_POST['MOMENT_TRAIN'] : 'True', $text);
        $text = preg_replace("'%QUEST%'", isset($_POST['QUEST']) ? $_POST['QUEST'] : 'True', $text);
        $text = preg_replace("'%SELL_CP%'", 'False', $text);
        $text = preg_replace("'%SELL_RES%'", 'False', $text);
        $text = preg_replace("'%COSTRES%'", '10', $text);
        $text = preg_replace("'%DEFGOLD%'", isset($_POST['defgold']) ? $_POST['defgold'] : '100', $text);
        $text = preg_replace("'%HOWRES%'", '10000', $text);
        $text = preg_replace("'%COSTCP%'", '20', $text);
        $text = preg_replace("'%HOWCP%'", '2500', $text);
        $text = preg_replace("'%AUCTIME%'", isset($_POST['auctime']) ? $_POST['auctime'] : '10800', $text);
        $text = preg_replace("'%PRHOUR%'", isset($_POST['phour']) ? $_POST['phour'] : '3600', $text);
        $text = preg_replace("'%CATAPULT_C%'", '0', $text);

        fwrite($fh, $text);
        fclose($fh);

        // Execute SQL Database Schema Insertion
        $p_query = file_get_contents("data/sql.sql");
        $mysqli = new mysqli($_POST['sserver'], $_POST['suser'], $_POST['spass'], $_POST['sdb']);
        if ($mysqli->connect_error) {
            die("خطا در اتصال به دیتابیس: " . $mysqli->connect_error);
        }
        $mysqli->set_charset("utf8");

        $sql = "DROP TABLE IF EXISTS `a2b`,`odemeler`,`packages`, `abdata`, `achiev`, `activate`, `adventure`, `alidata`, `ali_invite`, `ali_log`, `ali_permission`, `antimult`, `artefacts`, `attacks`, `auction`, `banlist`, `bdata`, `buygold`, `confs`, `critical_log`, `demolition`, `diplomacy`, `enforcement`, `farmlist`, `fdata`, `hero`, `heroface`, `heroinventory`, `heroitems`, `links`, `log`, `map_control`, `market`, `mdata`, `medal`, `movement`, `ndata`, `newproc`, `news`, `odata`, `online`, `palevo`, `password`, `prisoners`, `queue`, `raidlist`, `referals`, `research`, `roullet`, `route`, `sitters`, `spravka`, `tdata`, `training`, `units`, `users`, `vdata`, `wdata`, `config`, `codes`, `payments`, `autorenewals`, `quests`, `deleted`, `ignore`, `plusaddons`, `storage`, `support`;";
        @$mysqli->query($sql);

        $big = $mysqli->multi_query($p_query);
        if ($big) {
            do {
                if ($result = $mysqli->store_result()) {
                    $result->free();
                }
                $mysqli->more_results();
            } while ($mysqli->next_result());
        } else {
            echo "خطا در ساخت جداول دیتابیس: " . $mysqli->error . "<br>";
        }

        // Insert Config Row into MySQL DB
        $def_gold = isset($_POST['defgold']) ? intval($_POST['defgold']) : 100;
        $auc_time = isset($_POST['auctime']) ? intval($_POST['auctime']) : 10800;
        $speed = isset($_POST['speed']) ? intval($_POST['speed']) : 100;
        $inc_speed = isset($_POST['incspeed']) ? intval($_POST['incspeed']) : 100;
        $beginner = isset($_POST['beginner']) ? intval($_POST['beginner']) : 86400;
        $tradercap = isset($_POST['tradercap']) ? intval($_POST['tradercap']) : 1;
        $cranny = isset($_POST['cranny']) ? intval($_POST['cranny']) : 1;
        $storage_mul = isset($_POST['storage_multiplier']) ? intval($_POST['storage_multiplier']) : 1;
        $server_name = isset($_POST['servername']) ? $mysqli->real_escape_string($_POST['servername']) : 'تراوین آنلاین';
        $homepage = isset($_POST['homepage']) ? $mysqli->real_escape_string($_POST['homepage']) : 'http://' . $_SERVER['HTTP_HOST'] . '/';

        $sql_config = "INSERT INTO config VALUES(NULL, " . time() . ", " . time() . ", 0, 1, '', '" . $server_name . "', " . $def_gold . ", " . $auc_time . ", 'gpack/img_rtl/', " . $opening . ", 1, " . $speed . ", 1, " . $artefacts . ", " . $ww_plan . ", " . $cranny . ", 10, " . round($speed / 80) . ", " . $storage_mul . ", " . $inc_speed . ", " . $beginner . ", " . $tradercap . ", 604800, 604800, '" . $homepage . "', 'admin@test.com', 10, 100, 5, 1, 25, 400, 80, 50, 1000, 2500, 4900, 75, 150, 250, 180000000, 560000000, 1800000000, 'fa', 0, 0, 0);";
        $mysqli->query($sql_config) or die($mysqli->error);

        // Seed 5 default gold coin packages into `packages` table
        $mysqli->query("INSERT IGNORE INTO `packages` (`id`, `name`, `price`, `amount`, `cark`, `tip`) VALUES
            (1, 'بسته برنزی', 25000.00, 50, 0, 'gold'),
            (2, 'بسته نقره‌ای', 50000.00, 120, 0, 'gold'),
            (3, 'بسته طلایی', 100000.00, 300, 0, 'gold'),
            (4, 'بسته الماس', 200000.00, 700, 0, 'gold'),
            (5, 'بسته ویژه VIP', 500000.00, 2000, 0, 'gold');");

        header("Location: index.php?s=3");
        exit;
    }

    function createStruc() {
        header("Location: index.php?s=3");
    }

    function createWdata() {
        header("Location: include/wdata.php");
    }
}

$process = new Process;
