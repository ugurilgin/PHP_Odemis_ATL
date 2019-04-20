<?php
header("Content-type: image/png");//Sayfanýn grafik olduðunu tarayýcýya bildiriyoruz
$resim=imagecreate(250,250);//Varsayýlan rengimizi siyah olarak belirliyoruz
$kirmizi=imagecolorallocate( $resim, 255,0,0);
$beyaz=imagecolorallocate( $resim, 255,255,255);
imagefilledrectangle($resim,30,30,210,210,$beyaz);//dikdörtgenin alanlarýný belirliyoruz ve içini beyaza boyuyoruz
imagefilledrectangle($resim,50,50,190,190,$kirmizi);
imagefilledrectangle($resim,70,70,170,170,$beyaz);
imagefilledrectangle($resim,90,90,150,150,$kirmizi);
imagefilledrectangle($resim,110,110,130,130,$beyaz);
imagepng($resim);
imagedestroy($resim);
?>