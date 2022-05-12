<?php

// memanggil koneksi database

include "../../class/config.php";
include "../../class/pegawai.php";
include "../../class/bagian.php";

	$PegawaiList = new pegawai($database);
	$PegawaiList->PegawaiList();
	$DaftarPegawai = $PegawaiList->PegawaiList();

	$i=1;

	$BagianList = new bagian ($database);
	$PegawaiList->PegawaiList();
	$DaftarBagian = $BagianList->BagianList();


?>