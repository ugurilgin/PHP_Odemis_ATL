<?php
header("Content-type: image/jpeg");
$en=100;$boy=50;
$resim=imagecreate($en,$boy);
$mavi=imagecolorallocate($resim,0,0,250);
$beyaz=imagecolorallocate($resim,255,255,255);
$guvenlikkodu=rand(10000,99999);
imagestring($resim,9,30,20,$guvenlikkodu,$beyaz);
imageline($resim,0,25,100,25,$beyaz);
imageline($resim,0,35,100,35,$beyaz);
imagejpeg($resim);
imagedestroy($resim);
?>