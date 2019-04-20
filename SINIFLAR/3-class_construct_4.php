<?php
require "3-class_construct_3.php";
$Araba=new Otomobil("Ferrari","LaFerrari","Kýrmýzý");
$oto=new Otomobil("Anadolu","Toprak","Beyaz");
echo $oto->Marka;
echo "<br>";
echo $Araba->Model;
?>