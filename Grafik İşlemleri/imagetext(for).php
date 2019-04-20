<?php
header("Content-type: image/gif");
$resim=imagecreate(400,300);
$kirmizi=imagecolorallocate($resim,255,0,0);
$beyaz=imagecolorallocate($resim,255,255,255);
$metin="HALUK OGUZ";
$boyut=15;
$aci=240;
$x=200;
$y=150;
for($k=1;$k<=20;$k++)
{
	imagettftext($resim,$boyut,$aci,$x,$y,$beyaz,"mvboli.ttf",$metin);
	$aci+=20;
}
imagepng($resim,"yazi2.png",8,10);
imagepng($resim);
imagedestroy($resim);
?>