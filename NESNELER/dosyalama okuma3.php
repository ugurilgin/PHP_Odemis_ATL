<?php
$dizin="örnek";
$dosya_adi="dosya.txt";
if($dosya=fopen($dizin."/".$dosya_adi,"r"))
{
	echo "dosya adý".$dosya_adi."<br/>";
	echo "dosya boyutu".filesize($dosya_adi)."byte<br/>";
	$blok=fread($dosya,100);
	echo 	"içerik<br/>";
	echo "$blok";
	}
	else echo "dosya açýlmadý:".$dosya_adi;
?>