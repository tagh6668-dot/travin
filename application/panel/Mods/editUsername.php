<?php
session_start();

if(!isset($_SESSION['access']) || $_SESSION['access'] < 9){
    header("HTTP/1.1 403 Forbidden");
    exit("<h1><font color='red'>Access Denied: You are not Admin!</font></h1>");
}

include_once("../../config.php");
include_once("../../DB.php");
include_once("../../Database/db_MYSQL.php");

$uid = isset($_POST['uid']) ? intval($_POST['uid']) : 0;
$username = isset($_POST['username']) ? trim($_POST['username']) : '';

/* فیلتر امنیتی برای نام کاربری */
$username = htmlspecialchars($username, ENT_QUOTES, 'UTF-8');

/* خالی یا طول غیرمجاز رد شود */
if($uid <= 0 || strlen($username) < 3 || strlen($username) > 20){
    exit("Invalid input.");
}

/* اضافه کردن محدودیت بیشتر (فقط حروف و عدد و زیرخط) */
if(!preg_match('/^[A-Za-z0-9_]+$/', $username)){
    exit("Invalid characters in username.");
}

/* استفاده از متد امن دیتابیس */
$q = "UPDATE users SET username = ? WHERE id = ?";
$database->queryFetch($q, [$username, $uid]);

header("Location: ../../../panel/admin.php?p=player&uid=".$uid);
exit;
?>
