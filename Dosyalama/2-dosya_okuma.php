<?php
$dosya=fopen("dosya.txt","r");//r okumak için yazmak için r yerine w yazýlýr.
while(!feof($dosya))
{
	$satýr=fgets($dosya,50);//50'sini okur'
	echo $satýr;
}
fclose($dosya)
?>