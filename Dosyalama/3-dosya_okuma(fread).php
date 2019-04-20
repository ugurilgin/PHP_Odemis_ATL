<?php
//fread():Dosyadan satýr satýr deðil de blok okumak istediðimiz durumlarda bu fonksiyonu kullanýrýz.farklý olarakyenisatýr karakteri görülünce durmaz
$dizin="örnek";
$dosya_adi="dosya.txt";
if($dosya=fopen($dizin."/".$dosya_adi,"r"))
{
	echo "Dosya Adý:c".$dosya_adi."<br>";
	echo "Dosya Boyutu: ".filesize($dosya_adi)." Byte<br>";
	$blok=fread($dosya,100);
	echo "Dosya Ýçeriði: <br>";
	echo $blok;
}
else
echo "Dosya Açýlamadý: ".$dosya_adi;
?>