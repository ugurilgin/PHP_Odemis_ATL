<?php
require "3-class_construct_5.php";
$yaris=new YarisOtomobili("Ferrari","Laferrari","Kýrmýzý");
$AracimMarka=$yaris->Marka;
$AracimModel=$yaris->Model;
$AracMotor=$yaris->MotorSec();
echo $AracimMarka,$AracimModel,$AracMotor;
?>