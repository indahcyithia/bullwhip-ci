<?php

namespace App\Controllers;

// use App\Models\BagianModel;
use App\Models\BarangModel;
use App\Models\PengambilanModel;

class Gudang extends BaseController
{
    public function index()
    {
        $session = session();
        echo view('gudang/header');
        echo view('gudang/navbar');
        echo view('gudang/index');
        echo view('gudang/footer');
    }
    public function stock()
    {
        $session = session();
        $barangModel = new BarangModel();
        $data['Barang'] = $barangModel->getStockBarang();
        echo view('gudang/header');
        echo view('gudang/navbar');
        echo view('gudang/stok_tabel', $data);
        echo view('gudang/footer');
    }
    public function pengambilan()
    {
        $session = session();
        $pengambilanModel = new PengambilanModel();
        $data['Pengambilan'] = $pengambilanModel->getPengambilan();
        echo view('gudang/header');
        echo view('gudang/navbar');
        echo view('gudang/pengambilan_tambah');
        echo view('gudang/pengambilan_tabel', $data);
        echo view('gudang/footer');
    }
    public function tambahPengambilan()
    {
        $session = session();
        $barangModel = new BarangModel();
        $data['Barang'] = $barangModel->getBarang();
        echo view('gudang/header');
        echo view('gudang/navbar');
        echo view('gudang/form_2_input_pengambilan_barang', $data);
        echo view('gudang/footer');
    }
    public function savePengambilan()
    {
        $session = session();
        $nama = $this->request->getPost('nama_pengambil');
        $barang = $this->request->getPost('id_barang');
        $jumlah = $this->request->getPost('jumlah_pengambilan');
        $pengambilanModel = new PengambilanModel();
        $data['Pengambilan'] = $pengambilanModel->tambahPengambilan($nama, $barang, $jumlah);
        $this->pengambilan();
    }
}
