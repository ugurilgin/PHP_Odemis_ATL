<?php
//Dosyaya yazma fonksiyonlarý fwrite() ve fputs()'dur.Bu iki fonksiyon tamamen ayný iþi yapar.Aralarýnda bir fark yoktur.Genel Kullaným Þekilleri:
//fputs($dosya,"Dosyaya yazýlacak ya da eklenecek ifade..");
$dosya=fopen("dosya.txt","w");
$i=0;
while($i<10)
{
	$bilgi=$i.".kayýt\n";
	fwrite($dosya,$bilgi);
	$i++;
}
fclose($dosya);
?>