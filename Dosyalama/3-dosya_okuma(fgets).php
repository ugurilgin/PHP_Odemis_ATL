<?php
//fgets():bu fonksiyon parametre olarak daha önce açýlmýþ olan dosyaya ait deðiþkeni ve asgari okuyacaðý byte miktarýný alýr
$dizin="Örnek";
$dosya_adi="dosya.txt";
if($dosya=fopen($dizin."/".$dosya_adi,"r"))
{
	echo "Dosya Adý:".$dosya_adi."<br>";
	$i=0;
	
	while(!feof($dosya))//dosya sonuna gelmediði müddetçe
	{
		$i++;
		$satýr=fgets($dosya,1000);
		echo $i.".Satýr: ".$satýr."<br>";
	}
}
else
echo "Dosya açýlamadý: ".$dosya_adi;
?>