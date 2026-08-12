<?php
header('Content-Type: text/html; charset=UTF-8');

set_time_limit(0);
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);

//////////////////////////////////
//   ****  SQL SETTINGS  ****   //
//////////////////////////////////
define("SQL_SERVER", "%SSERVER%");
define("SQL_USER", "%SUSER%");
define("SQL_PASS", "%SPASS%");
define("SQL_DB", "%SDB%");
try {
  $baglanDB = new PDO("mysql:host=".SQL_SERVER.";dbname=".SQL_DB, SQL_USER, SQL_PASS, 
  [ 
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
  ]);
} catch(PDOException $e) {
    $baglanDB=false;
}

define('APP_MAIN_PATH', dirname(realpath(__DIR__)));
define('APP_BASE_PATH', realpath(__DIR__));
include_once(realpath(__DIR__)."/DB.php");

$sData = [];
if (isset($db) && method_exists($db, 'queryFetch')) {
    $sData = $db->queryFetch("SELECT * FROM config LIMIT 1");
}

define("SERVER_NAME", isset($sData['SERVER_NAME']) ? $sData['SERVER_NAME'] : 'تراوین'); // titre server
define("DEFAULT_GOLD", isset($sData['DEFAULT_GOLD']) ? $sData['DEFAULT_GOLD'] : 100);  // gold 
define("AUCTIONTIME", isset($sData['AUCTIONTIME']) ? $sData['AUCTIONTIME'] : 10800); // auction seconds
define("GP_LOCATE", isset($sData['GP_LOCATE']) ? $sData['GP_LOCATE'] : 'gpack/img_rtl/');
define("OPENING", isset($sData['OPENING']) ? $sData['OPENING'] : time()); 
define("REF_POP", 500); 
define("REF_GOLD", 50);
define("OASISX", isset($sData['OASISX']) ? $sData['OASISX'] : 1); 
define("SPEED", isset($sData['SPEED']) ? $sData['SPEED'] : 100); // speed server
define("MAX_FILES", 1000);
define("MAX_FILESH", 3000);
define("IMGQUALITY", 99); 
define("MOMENT_TRAIN", isset($sData['MOMENT_TRAIN']) ? $sData['MOMENT_TRAIN'] : True); 
define("QUEST", True);
define("ARTEFACTS", isset($sData['ARTEFACTS']) ? $sData['ARTEFACTS'] : (time() + 86400*3)); // date artefacts
define("WW_PLAN", isset($sData['WW_PLAN']) ? $sData['WW_PLAN'] : (time() + 86400*6)); // date plan Building
define("CRANNY_CAP", isset($sData['CRANNY_CAP']) ? $sData['CRANNY_CAP'] : 1); // cranny
define("ADV_TIME", 86400 / (isset($sData['ADV_TIME']) && $sData['ADV_TIME'] > 0 ? $sData['ADV_TIME'] : 10)); // adventure
define("TRAPPER_CAPACITY", isset($sData['TRAPPER_CAPACITY']) ? $sData['TRAPPER_CAPACITY'] : 1); 
define("LANG", isset($sData['Lang']) ? $sData['Lang'] : 'fa'); // speed server
define("CATAPULT_C", isset($sData['catapult_c']) ? $sData['catapult_c'] : 0); 

define("TRI5BES", TRUE);

define("MAX_UNIT", 70); 
define("MAX_TRIBE", 7);
define("STORAGE_MULTIPLIER", isset($sData['STORAGE_MULTIPLIER']) ? $sData['STORAGE_MULTIPLIER'] : 1); 
define("STORAGE_BASE", 800 * STORAGE_MULTIPLIER);

define("WORLD_MAX", "100");
define("INCREASE_SPEED", isset($sData['INCREASE_SPEED']) ? $sData['INCREASE_SPEED'] : 100);

define("PHOUR", "3600");
define("PROTECTIOND", isset($sData['PROTECTIOND']) ? $sData['PROTECTIOND'] : 86400);
$timestoup = 0;
$fromstart = time() - OPENING;
if($fromstart >= 42300){
    $timestoup = floor($fromstart / 42300);
}

define("PROTECTION", PROTECTIOND);
define("TRADER_CAPACITY", isset($sData['TRADER_CAPACITY']) ? $sData['TRADER_CAPACITY'] : 1); 
define("INCLUDE_ADMIN", True);
define("CP", "1");

define("PLUS_TIME", isset($sData['PLUS_TIME']) ? $sData['PLUS_TIME'] : 604800);
define("PLUS_PRODUCTION", isset($sData['PLUS_PRODUCTION']) ? $sData['PLUS_PRODUCTION'] : 604800);
define("TS_THRESHOLD", 20);

define("ALLOW_ALL_TRIBE", true);
define("USRNM_MIN_LENGTH", 3);
define("PW_MIN_LENGTH", 4);
define("BANNED", 0);
define("MULTIHUNTER", 8);
define("ADMIN", 9);
define("COOKIE_EXPIRE", 60*60*24*7);
define("COOKIE_PATH", "/");
define("HOMEPAGE", isset($sData['HOMEPAGE']) ? $sData['HOMEPAGE'] : 'http://' . $_SERVER['HTTP_HOST'] . '/');
define("MAXLENGHT", "15");
define("RADIUS", 2);

define("MAX_LEVEL", TRUE); 
define("MAX_LEVEL_COST", 5); 

define("FINISH_ALL", TRUE); 
// Dynamic Instant Troop Training cost from DB table config
define("FINISH_ALL_COST", (isset($sData['FINISH_ALL_COST']) && is_numeric($sData['FINISH_ALL_COST'])) ? intval($sData['FINISH_ALL_COST']) : 30);
define("ZARINPAL_MERCHANT", (isset($sData['zarinpal_merchant']) && !empty($sData['zarinpal_merchant'])) ? $sData['zarinpal_merchant'] : 'b027468f-bd1d-4d48-9f6d-9038aa9ad46c');

define("MEDALS", 259200); 
define("farmList", 20); 
define("maxOasisRes", 10000); 
define("DEMOLISH_FULL", 5); 

define("adminMail", isset($sData['adminMail']) ? $sData['adminMail'] : 'admin@test.com');

$config = array(
    'goldClub' => isset($sData['goldClub']) ? $sData['goldClub'] : 100,
    'Plus' => isset($sData['Plus']) ? $sData['Plus'] : 10,
    'addonProduction' => isset($sData['addonProduction']) ? $sData['addonProduction'] : 5,
    'needActivate' => 0,
    'plusFeatures' => isset($sData['plusFeatures']) ? $sData['plusFeatures'] : 1,
    'storageUpgrade' => isset($sData['storageUpgrade']) ? $sData['storageUpgrade'] : 25,
    '25pFaster' => isset($sData['25pFaster']) ? $sData['25pFaster'] : 400,
    'allSmithy' => isset($sData['allSmithy']) ? $sData['allSmithy'] : 80,
    'searchAll' => isset($sData['searchAll']) ? $sData['searchAll'] : 50,
    'resources01' => isset($sData['resources01']) ? $sData['resources01'] : 1000,
    'resources02' => isset($sData['resources02']) ? $sData['resources02'] : 2500,
    'resources03' => isset($sData['resources03']) ? $sData['resources03'] : 4900,
    'protect01' => isset($sData['protect01']) ? $sData['protect01'] : 75,
    'protect02' => isset($sData['protect02']) ? $sData['protect02'] : 150,
    'protect03' => isset($sData['protect03']) ? $sData['protect03'] : 250,
    'resources01A' => isset($sData['resources01A']) ? $sData['resources01A'] : 180000000,
    'resources02A' => isset($sData['resources02A']) ? $sData['resources02A'] : 560000000,
    'resources03A' => isset($sData['resources03A']) ? $sData['resources03A'] : 1800000000,
);

$packages = [];
if (isset($baglanDB) && $baglanDB) {
    $paketler = $baglanDB->query('SELECT * FROM paketler')->fetchAll(PDO::FETCH_ASSOC);
    if(count($paketler)){
        foreach($paketler as $paket){
            $packages[$paket['id']] = [
                'paket' => $paket['paketadi'],
                'fiyat' => $paket['fiyat'],
                'miktar' => $paket['miktar'],
                'tip' => $paket['tip'],
                'cark' => $paket['cark'],
            ];
        }
    }
}