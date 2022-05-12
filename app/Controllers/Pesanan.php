<?php

namespace App\Controllers;

// use App\Models\BagianModel;
use App\Models\PesananModel;
use App\Models\BarangModel;

class Pesanan extends BaseController
{
    public function index()
    {
        $session = session();
        echo view('pesanan/header');
        echo view('pesanan/navbar');
        echo view('pesanan/index');
        echo view('pesanan/footer');
    }
    public function daftarPesanan()
    {
        $session = session();
        $pesananModel = new PesananModel();
        $data['Pesanan'] = $pesananModel->getPesanan();
        echo view('pesanan/header');
        echo view('pesanan/navbar');
        echo view('pesanan/pesanan_tambah');
        echo view('pesanan/pesanan_tabel', $data);
        echo view('pesanan/footer');
    }
    public function tambahPesanan()
    {
        $session = session();
        $barangModel = new BarangModel();
        $data['Barang'] = $barangModel->getBarang();
        echo view('pesanan/header');
        echo view('pesanan/navbar');
        echo view('pesanan/form_1_input_pesanan', $data);
        echo view('pesanan/footer');
    }
    public function savePesanan()
    {
        $nama = $this->request->getPost('nama_pemesan');
        $barang = $this->request->getPost('id_barang');
        $jumlah = $this->request->getPost('jumlah_pesanan');

        $session = session();
        $pesananModel = new PesananModel();
        $pesananModel->tambahPesanan($nama, $barang, $jumlah);
        $this->daftarPesanan();
    }
    public function barangBaru()
    {
        $session = session();
        $barangModel = new BarangModel();
        $data['Barang'] = $barangModel->getBarang();
        echo view('pesanan/header');
        echo view('pesanan/navbar');
        echo view('pesanan/form_2_barang', $data);
        echo view('pesanan/footer');
    }
    public function saveBarang()
    {
        $session = session();
        $barangModel = new BarangModel();
        $nama = $this->request->getPost('nama_barang');
        $data['Barang'] = $barangModel->tambahBarang($nama);
        $this->barangBaru();
    }
}
