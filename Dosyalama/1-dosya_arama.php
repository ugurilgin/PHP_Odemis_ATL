<?php
$dosya="dosya.txt";
if(file_exists($dosya))
{
echo "Dosya Var";
}
else
{
	echo "Dosya Yok";
}
?>