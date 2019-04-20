<?php
//Hedef resmi alýyoruz
$resim = "resimler/resim.jpg";
//resmi ölçeklendirmek için max. ebatlarý ayarlýyoruz
$max_boy = 300 ; //boy 300 piksel den fazla olamayacak
$max_en = 300;   //en 300 piksel den fazla olamayacak
//kaynak resmin boyutlarýný alýyoruz
$boyut = getimagesize($resim);
//yeni resmin boyutlarý için oranlama iþlemi yapýlýyor
$boyorani = ($boyut[0] / $max_en); //hangi oranda küçülteceðimizi ayarlýyoruz
$enorani = ($boyut[1] / $max_boy); //boy oraný 2.56 en oraný 3.4
//en büyük oraný alýyoruz
if ($boyorani >= $enorani)
$oran = $enorani;
else
$oran = $enorani;
//oluþturacaðýmýz resmin boyutlarýný ayarlýyoruz
$yenien = ($boyut[0] / $oran); 
$yeniboy = ($boyut[1] / $oran);

header("Content-type: image/jpeg"); 

$kaynakresim = imagecreatefromjpeg($resim);
$yeniresim = imagecreatetruecolor($yenien,$yeniboy);
imagecopyresampled($yeniresim,$kaynakresim,0,0,0,0,$yenien,$yeniboy,$boyut[0],$boyut[1]);
imagejpeg($yeniresim,"resimler/resimküçük.jpg");
imagedestroy($kaynakresim);
imagedestroy($yeniresim);

?>