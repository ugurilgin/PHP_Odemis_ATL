<?php
require "9-otomobil.php";
$arabam=new otomobil();
$sonuc=$arabam->calistir("12345");
if($sonuc)
echo "araç çalýþtý";
else
echo"Hýrkýzzz";
?>