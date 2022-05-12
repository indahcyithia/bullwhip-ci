<?php

// memanggil koneksi database

include "../../class/config.php";
include "../../class/bagian.php";

	$BagianList = new bagian($database);
	$BagianList->BagianList();
	$DaftarBagian = $BagianList->BagianList();

	$i=1;

?>