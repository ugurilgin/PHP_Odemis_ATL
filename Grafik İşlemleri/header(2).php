<?php
header("Content-type: image/png");//sayfanýn grafik olduðunu tarayýcýya bildirdik
$resim=imagecreatetruecolor(200,200);//Resmimizi oluþturuyoruz
imagepng($resim);//Resmimizi png formatýna çeviriyoruz ve tarayýcýda görüntülüyoruz
imagedestroy($resim);//Oluþturduðumuz resmi tarayýcýdan siliyoruz.
?>