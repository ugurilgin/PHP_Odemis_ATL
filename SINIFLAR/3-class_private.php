<?php
class Otomobil
{//renk seçeneklerini belirliyoruz
//renk seçeneðinin private olduðuna dikkat
	private $renk=array("Kýrmýzý","Beyaz","Siyah");
	public function renkler()
	{//this ile yukarýda tanýmladýðýmýz renk dizisini alýyoruz ve bu diziyifonksiyonun çaðrýldýðý yere gönderiyoruz
		return $this->renk;//this anahtar sözcüktür.sýnýf içerisindekinesnelere eriþimi saðlar
	}
}
?>