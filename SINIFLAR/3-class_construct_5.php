<?php
class Otomobil
{
	public $Marka,$Model,$renk;
	public function __construct($MMarka,$MModel,$Rrenk)
	{
		$this->Marka=$MMarka;
		$this->Model=$MModel;
		$this->renk=$Rrenk;
	}
}
class YarisOtomobili extends Otomobil
{
	public function MotorSec()
	{
		return"5.00 Lt";
	}
}
?>