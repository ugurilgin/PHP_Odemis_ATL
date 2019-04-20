<?php
$dizin="örnek";
$dosya_adi="dosya.txt";
if($dosya=fopen($dizin."/".$dosya_adi,"r"))
{
	echo "dosya adı".$dosya_adi."<br/>";
	$i=0;
	while(!feof($dosya))
	{
		$i++;
		$karakter=fgetc($dosya);
		echo $i."karakter:  ------------->    ".$karakter."<br/>";
	}
	}
	else echo "dosya açılmadı:".$dosya_adi;
?>