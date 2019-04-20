<?php
$resim="resimler/resim.jpg";
$max_boy=300;
$max_en=300;
$boyut=getimagesize($resim);
$boyoran=($boyut[0] / $max_en);
$enoran=($boyut[1] / $max_boy);
if($boyoran>=$enoran) $oran=$boyoran;
else
$oran=$enoran;
$yenien=($boyut[0] / $oran);
$yeniboy=($boyut[1] / $oran);
header("Content-Type: image/jpeg");
$kaynakresim=imagecreatefromjpeg($resim);
$yeniresim=imagecreatetruecolor($yenien,$yeniboy);
imagecopyresampled($yeniresim,$kaynakresim,0,0,0,0,$yenien,$yeniboy,$boyut[0],$boyut[1]);
imagejpeg($yeniresim,"resimler/resimküçük.jpg");
imagedestroy($kaynakresim);
imagedestroy($yeniresim);
?>