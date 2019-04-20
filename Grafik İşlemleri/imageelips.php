<?php
header("Content-type: image/png");
$resim=imagecreate(200,150);
imagecolorallocate($resim,0,100,0);
$elipsrenk=imagecolorallocate($resim,255,255,255);
imageellipse($resim,100,75,150,100,$elipsrenk);
imagepng($resim);
imagedestroy($resim);
?>