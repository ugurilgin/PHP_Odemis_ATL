<?php
header("Content-type: image/jpeg");
$resim=imagecreate(200,150);
imagecolorallocate($resim,0,100,0);
$kafa=imagecolorallocate($resim,255,255,255);
$goz=imagecolorallocate($resim,255,127,80);
imagefilledellipse($resim,100,75,150,100,$kafa);
imagefilledellipse($resim,65,65,30,20,$goz);
imagefilledellipse($resim,135,65,30,20,$goz);
imagefilledellipse($resim,100,70,10,50,$goz);
imagefilledellipse($resim,100,105,100,10,$goz);
imagejpeg($resim);
imagedestroy($resim);
?>