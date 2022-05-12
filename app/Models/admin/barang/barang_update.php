<?php
	include "../../class/config.php";
	include "../../class/barang.php";

	if(isset($_POST['update']));
	{
		$BarangUpdate = new barang($database);
		$BarangUpdate->setId_Barang($_POST['id_barang']);
		$BarangUpdate->setNama_Barang($_POST['nama_barang']);

		$BarangUpdate->BarangUpdate();

		header ("location:index.php");
	}

?>