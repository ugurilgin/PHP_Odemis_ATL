<?php
header("Content-type: image/gif");
$resim=imagecreate(250,100);
imagecolorallocate($resim,135,206,235);
$yazirengi=imagecolorallocate($resim,139,35,35);
imagestring($resim,5,20,20,"IZMIR",$yazirengi);
imagestring($resim,7,180,20,"Haluk",$yazirengi);
imagestring($resim,6,40,40,"OGUZ",$yazirengi);
imagestring($resim,7,60,60,"1995",$yazirengi);
imagepng($resim,"yazý.png",8,10);
imagepng($resim);
imagedestroy($resim);
?>