<?php
header("Content-type: image/gif");
$resim=imagecreate(400,300);
imagecolorallocate($resim,255,255,255);
$mavi=imagecolorallocate($resim,0,0,255);
$yesil=imagecolorallocate($resim,0,255,0);
$kirmizi=imagecolorallocate($resim,255,0,0);
imagefilledellipse($resim,200,150,200,200,$kirmizi);
imagefilledellipse($resim,200,150,180,180,$mavi);
imagefilledellipse($resim,200,150,50,50,$kirmizi);
imagefilledarc($resim,200,150,200,200,345,15,$yesil,IMG_ARC_PIE);
imagefilledarc($resim,200,150,200,200,255,285,$yesil,IMG_ARC_PIE);
imagefilledarc($resim,200,150,200,200,165,195,$yesil,IMG_ARC_PIE);
imagefilledarc($resim,200,150,200,200,75,105,$yesil,IMG_ARC_PIE);
imagegif($resim);
imagedestroy($resim);
?>