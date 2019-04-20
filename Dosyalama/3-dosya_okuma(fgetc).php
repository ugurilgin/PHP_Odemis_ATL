<?php
//fgetc():Bu fonksiyon dosyadan her defasýnda bir karakter okutmak için kullanýlýr.Daima bir byte veri okuyacaðý için parametreolarak sadece dosya deðiþkeni yazýlýr.
$dizin="örnek";
$dosya_adi="dosya.txt";
if($dosya=fopen($dizin."/".$dosya_adi,"r"))
{
	echo "Dosya Adý:c".$dosya_adi."<br>";
	$i=0;
	while(!feof($dosya))//dosya sonuna gelmediði müddetçe
	{
		$i++;
		$karakter=fgetc($dosya,1000);
		echo $i.".Karakter: ".$karakter."<br>";
	}
}
else
echo "Dosya açýlamadý: ".$dosya_adi;
?>