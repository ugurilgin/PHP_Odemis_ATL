<?php
header("Content-type: image/gif");
$resim=imagecreate(400,300);
$kirmizi=imagecolorallocate($resim,255,0,0);
$beyaz=imagecolorallocate($resim,255,255,255);
$metin="ÖDEMIS EML";
$boyut=44;
$aci=340;
$x=10;
$y=90;
imagettftext($resim,$boyut,$aci,$x,$y,$beyaz,"mvboli.ttf",$metin);
imagepng($resim);
imagedestroy($resim);
?>