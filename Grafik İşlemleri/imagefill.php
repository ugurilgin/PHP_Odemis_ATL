<?php
header("Content-type: image/png");//Sayfanýn grafik olduðunu tarayýcýya bildiriyoruz
$resim=imagecreatetruecolor(250,250);//Varsayýlan rengimizi siyah olarak belirliyoruz
$renk=imagecolorallocate( $resim, 0,206,209);//resmin rengini belirliyoruz
imagefill( $resim,0,20,$renk);//Resmimizi boyuyoruz
imagepng($resim);//Resmimizi png formatýna çeviriyoruz ve tarayýcýda görüntülüyoruz
imagedestroy($resim);//Oluþturduðumuz resmi tarayýcýdan siliyoruz.
?>