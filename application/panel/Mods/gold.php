<?php
session_start();

if(!isset($_SESSION['access']) || $_SESSION['access'] < 9){
    die("<h1><font color='red'>Access Denied: You are not Admin!</font></h1>");
}

include_once("../../config.php");
include_once("../../DB.php");
include_once("../../Database/db_MYSQL.php");

$gold = isset($_POST['gold']) ? intval($_POST['gold']) : 0;

/* محدودیت منطقی */
if($gold > 100000) $gold = 100000;
if($gold < -100000) $gold = -100000;

$q = "UPDATE users SET gold = gold + ".$gold." WHERE id != '0'";
$database->queryFetch($q);

header("Location: ../../../panel/admin.php?p=gold&g");
exit;

?>
