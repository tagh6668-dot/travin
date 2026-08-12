<?php
session_start();

if(!isset($_SESSION['access']) || $_SESSION['access'] < 9){
    die("<h1><font color='red'>Access Denied: You are not Admin!</font></h1>");
}

include_once("../../config.php");
include_once("../../DB.php");
include_once("../../Database/db_MYSQL.php");

$uid = isset($_POST['uid']) ? intval($_POST['uid']) : 0;

$duration = isset($_POST['duration']) ? intval($_POST['duration']) * 3600 : 0;
$start = isset($_POST['start']) ? $_POST['start'] : '';
$startts = strtotime($start);
$endts = $startts + $duration;

$reason = isset($_POST['reason']) ? trim($_POST['reason']) : '';
$reason = htmlspecialchars($reason, ENT_QUOTES, 'UTF-8');

$admin = isset($_SESSION['username']) ? $_SESSION['username'] : 'admin';

if($uid <= 0){
    die("Invalid user ID");
}

/* گرفتن اطلاعات کاربر */
$user = $database->queryFetch("SELECT id, username FROM users WHERE id=".$uid." LIMIT 1");

if(!$user){
    die("User not found");
}

/* ثبت بن */
$database->queryFetch(
"INSERT INTO banlist (`uid`,`name`,`reason`,`time`,`end`,`admin`,`active`)
VALUES (".$user['id'].", '".$user['username']."', '".$reason."', '".$startts."', '".$endts."', '".$admin."', '1')"
);

header("Location: ../../../panel/admin.php?p=player&uid=".$uid);
exit;

?>
