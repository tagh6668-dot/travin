<?php
session_start();

$code = substr(str_shuffle("ABCDEFGHJKLMNPQRSTUVWXYZ23456789"),0,5);
$_SESSION['captcha'] = $code;

header("Content-type: image/png");

$image = imagecreate(120,40);
$bg = imagecolorallocate($image,255,255,255);
$textcolor = imagecolorallocate($image,0,0,0);

imagestring($image,5,30,10,$code,$textcolor);

imagepng($image);
imagedestroy($image);
?>
