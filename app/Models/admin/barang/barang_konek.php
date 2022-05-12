<?php


// memanggil koneksi database

include "../../class/config.php";
include "../../class/barang.php";

	$BarangList = new barang($database);
	$BarangList->BarangList();
	$DaftarBarang = $BarangList->BarangList();

	$i=1;

?>