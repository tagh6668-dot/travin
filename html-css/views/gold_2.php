<?php
session_start();
include_once(__DIR__ . "/../../application/config.php");
include_once(__DIR__ . "/../../application/DB.php");
include_once(__DIR__ . "/../../application/Database/db_MYSQL.php");

if(!isset($_SESSION['access']) || $_SESSION['access'] < 9) {
    die("<h1><font color='red'>Access Denied: You are not Admin!</font></h1>");
}

if(isset($_GET['g'])) {
    echo '<br /><br /><font color="Green"><b>عملیات با موفقیت انجام شد.</b></font>';
} else {
    $id = isset($_POST['id']) ? intval($_POST['id']) : 0;
    $gold = isset($_POST['gold']) ? intval($_POST['gold']) : 0;
    if ($id > 0 && $gold > 0) {
        $database->query("UPDATE users SET gold = gold - " . $gold . " WHERE id = " . $id);
    }
    header("Location: ../index.php?p=player&uid=" . $id);
    exit;
}
