<?php
	include "../class/config.php";
	include "../class/barang.php";
	include "../class/pengambilan.php";
	include "../class/produksi.php";

	$StokBarang = new barang($database);
	$StokBarang->StokBarang();
	$DataStok = $StokBarang->StokBarang();

?>