<?php
session_start();
$alphaNumeric = "ABCDEGHIKLMNOPQRSTUVWXYZ0123456789";
$random = substr(str_shuffle($alphaNumeric), 0, 5);
$image = imagecreatefromjpeg("background.jpg"); // Ganti dengan latar belakang yang diinginkan
$textColor = imagecolorallocate($image, 0, 0, 0); // Hitam
imagestring($image, 5, 5, 8, $random, $textColor);
$_SESSION['image_random_value'] = md5($random);
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, must-revalidate");
header("Pragma: no-cache");
header("Content-Type: image/jpeg");
imagejpeg($image);
imagedestroy($image);
?>
