<?php
$dosya_adi="dosya.txt";
$dosya=fopen($dosya_adi,"w")or die ("Dosya Açılamadı!");
$metin="Haluk Oğuz";
fwrite($dosya,$metin);
fputs($dosya,"Öğrenci");
fclose($dosya);
?>