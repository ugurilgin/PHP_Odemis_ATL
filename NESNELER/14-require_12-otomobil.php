<?php
require "12-otomobil.php";
$yaris=new yarisotomobili("ferrari ","laferrari ","kýrmýzý ");
$amarka=$yaris->marka;
$amodel=$yaris->model;
$amotor=$yaris->motorsec();
echo $amarka,$amodel,$amotor;
?>