<?php

// memanggil koneksi database

include "../class/config.php";
include "../class/produksi.php";

// mulai penyimpanan

	if (isset($_POST['simpan']));
	{
		//$AddPegawai = new pegawai ();
//		$AddPegawai->setUsername($_POST['username']);
//		$AddPegawai->setPassword($_POST['password']);
//		$AddPegawai->setNama_Pegawai($_POST['nama_pegawai']);
//		$AddPegawai->setAlamat_Pegawai($_POST['alamat_pegawai']);
//		$AddPegawai->setHp_Pegawai($_POST['hp_pegawai']);
//		$AddPegawai->setId_Bagian($_POST['id_bagian']);
//
//		$AddPegawai->AddPegawai();

		$ProduksiTambah = new produksi($database);
		$ProduksiTambah->setId_Pesanan($_POST['id_pesanan']);
		$ProduksiTambah->setId_Barang($_POST['id_barang']);
		$ProduksiTambah->setJumlah_Produksi($_POST['jumlah_produksi']);
		$ProduksiTambah->setLead_Time($_POST['lead_time']);

		$ProduksiTambah->ProduksiTambah();


		header ("location:produksi.php");
	}


?>