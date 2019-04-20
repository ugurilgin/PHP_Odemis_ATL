<?php
require "7-otomobil.php";
$arabam=new otomobil();
$renk=$arabam->renkler();
echo"otomobil renk secenekleri <br/>";
for($a=0;$a<sizeof($renk);$a++)
{
	echo" $renk[$a] <br/>";
}
?>