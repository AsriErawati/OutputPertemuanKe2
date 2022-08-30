<?php
	function Perkenalan($nama, $desa, $lama){
		echo ("<br> Perkenalkan nama saya ".$nama.". Saya tinggal di desa ".$desa." sejak ".$lama." tahun yang lalu. ");
	}
	echo("<br> Pemanggilan pertama");
	Perkenalan('Era','Gebangkerep',10);
	echo("<br> Pemanggilan kedua");
	Perkenalan('Rini','Jogomerto',3);
	echo("<br> Pemanggilan ketiga");
	Perkenalan('Bimo','Sambiroto',5);
?>