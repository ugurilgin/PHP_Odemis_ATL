<?php
require "3-class_return.php";
$Arabam=new Otomobil();
$sonuc=$Arabam->Calistir("12345");
if($sonuc)
echo "Araç Çalýþtý";
else
echo "Yanlýþ Anahtar";
?>