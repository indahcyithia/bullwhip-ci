<?php


// memanggil koneksi database

include "../class/config.php";
include "../class/pemesanan.php";
include "../class/barang.php";
include "../class/produksi.php";

	$LihatPesanan = new produksi($database);
	$LihatPesanan->LihatPesanan();
	$DaftarPesanan = $LihatPesanan->LihatPesanan();
//	$DaftarPesanan = $LihatPesanan->LihatPesananBelumProses(); //ini pesanan yang prosesnya 0



	$BarangList = new barang($database);
	$BarangList->BarangList();
	$DaftarBarang = $BarangList->BarangList();

?>