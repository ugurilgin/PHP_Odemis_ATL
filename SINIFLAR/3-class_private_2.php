<?php
require "3-class_private.php";
$Arabam=new Otomobil();
$renk=$Arabam->renkler();
echo" Otomobil Renk Seçenekleri <br>";
for($a=0;$a<sizeof($renk);$a++){
	echo "$renk[$a] <br>";
}
?>