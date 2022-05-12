<?php
	include "../class/config.php";
	include "../class/barang.php";
	include "../class/pengambilan.php";

	$BarangList = new barang($database);
	$BarangList->BarangList();
	$DaftarBarang = $BarangList->BarangList();

	$AmbilBarangList = new pengambilan($database);
	$AmbilBarangList->AmbilBarangList();
	$DaftarPengambilan = $AmbilBarangList->AmbilBarangList();

?>