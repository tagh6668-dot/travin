<?php
session_start();

if(!isset($_SESSION['access']) || $_SESSION['access'] < 9){
    die("<h1><font color='red'>Access Denied: You are not Admin!</font></h1>");
}

include_once("../../config.php");
include_once("../../DB.php");
include_once("../../Database/db_MYSQL.php");

$id = isset($_POST['id']) ? intval($_POST['id']) : 0;

/* فیلتر ورودی‌ها */
$email    = isset($_POST['email'])    ? addslashes(trim($_POST['email'])) : '';
$tribe    = isset($_POST['tribe'])    ? intval($_POST['tribe']) : 0;
$location = isset($_POST['location']) ? addslashes(trim($_POST['location'])) : '';
$desc1    = isset($_POST['desc1'])    ? addslashes(trim($_POST['desc1'])) : '';
$desc2    = isset($_POST['desc2'])    ? addslashes(trim($_POST['desc2'])) : '';

$database->queryFetch("UPDATE users SET
    email = '".$email."',
    tribe = ".$tribe.",
    location = '".$location."',
    desc1 = '".$desc1."',
    desc2 = '".$desc2."'
    WHERE id = ".$id
);

header("Location: ../../../panel/admin.php?p=player&uid=".$id);
exit;
?>
