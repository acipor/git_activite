<?php
session_start();

$_SESSION['captcha']=mt_rand(1000,9999);
$img = imageCreate(65,30);
$font ='Arial';

$bg = imagecolorallocate($img,255,255,255);
$textcolor = imageColorAllocate($img,0,255,0);

imagettftext($img,23,0,3,30,$textcolor,$font,$_SESSION['captcha']);

header("Content-type: image/jpeg");
imagejpeg($img);
imageDestroy($img);
?>
