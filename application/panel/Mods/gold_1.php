<?php
session_start();

if(!isset($_SESSION['access']) || $_SESSION['access'] < 9){
    die("<h1><font color='red'>Access Denied: You are not Admin!</font></h1>");
}

include_once("../../config.php");
include_once("../../DB.php");
include_once("../../Database/db_MYSQL.php");

if(isset($_GET['g'])){
    echo '<br /><br /><font color="Red"><b>Gold Added</b></font>';
}else{

    /* فیلتر ورودی‌ها */
    $id   = isset($_POST['id'])   ? intval($_POST['id'])   : 0;
    $gold = isset($_POST['gold']) ? intval($_POST['gold']) : 0;

    if($id <= 0){
        die("Invalid user ID");
    }

    /* جلوگیری از خرابی یا اعداد منفی بیش از حد */
    if($gold > 1000000) $gold = 1000000;
    if($gold < -1000000) $gold = -1000000;

    /* آپدیت امن گلد */
    $database->queryFetch(
        "UPDATE users SET gold = gold + ".$gold." WHERE id = ".$id
    );

    /* ساخت لاگ امن */
    $time = time();
    $ip = $_SERVER['REMOTE_ADDR'];

    $info = "ip=".$ip."; gold=".$gold."; time=".$time."; uid=".$id;
    $info = addslashes($info);  // نگه داشتن ساختار بدون تغییر

    $q = "INSERT INTO palevo (uid, infa, type) VALUES (5, '".$info."', 10)";
    $database->queryFetch($q);

    header("Location: ../../../panel/admin.php?p=player&uid=".$id);
    exit;
}
?>
