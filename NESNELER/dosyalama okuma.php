<?php
$dosya=fopen("dosya.txt","r");
while(!feof($dosya))
{
	$satir=fgets($dosya,50);
	echo $satir;
}
fclose($dosya);
?>