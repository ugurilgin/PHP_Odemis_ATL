<?php
header("Content-type: image/png");//Sayfanýn grafik olduðunu tarayýcýya bildiriyoruz
$resim=imagecreate(350,250);//Resmimizi oluþturuyoruz
imagecolorallocate( $resim, 255,0,0);//Resmin rengini kýrmýzý olarak belirliyoruz
imagepng($resim);//Resmimizi png formatýna çeviriyoruz ve tarayýcýda görüntülüyoruz
imagedestroy($resim);//Oluþturduðumuz resmi tarayýcýdan siliyoruz.
?>