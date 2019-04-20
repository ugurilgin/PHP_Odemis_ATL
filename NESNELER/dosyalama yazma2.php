<?php
$dosya_adi="dosya.txt";
$dosya=fopen($dosya_adi,"w")or die	("dosya açýlmadý");
$metin="Uður Ilgýn";
fwrite($dosya,$metin);
fputs($dosya,"  Mühendis");
fclose($dosya);
?>