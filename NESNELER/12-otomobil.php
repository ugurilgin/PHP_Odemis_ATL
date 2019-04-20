<?php
class otomobil
{
	public $marka,$model,$renk;
	public function __construct($mmarka,$mmodel,$rrenk)
	{
		$this->marka=$mmarka;
		$this->model=$mmodel;
		$this->renk=$rrenk;
	}
}
class yarisotomobili extends otomobil
{
	public function motorsec()
	{
		return "5.00Lt";
	}
}
?>