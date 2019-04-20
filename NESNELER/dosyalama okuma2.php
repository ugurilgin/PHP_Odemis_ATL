<?php
$dizin="örnek";
$dosya_adi="dosya.txt";
if($dosya=fopen($dizin."/".$dosya_adi,"r"))
{
	echo "dosya adý".$dosya_adi."<br/>";
	$i=0;
	while(!feof($dosya))
	{
		$i++;
		$satir=fgets($dosya,1000);
		echo $i.".Satýr:".$satir."<br/>";
	}
}
else echo "dosya açýlmadý".$dosya_adi;
?>