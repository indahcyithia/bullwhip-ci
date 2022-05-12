<?php

namespace App\Controllers;

// use App\Models\BagianModel;
use App\Models\PesananModel;
use App\Models\ProduksiModel;

class Produksi extends BaseController
{
    public function index()
    {
        $session = session();
        echo view('produksi/header');
        echo view('produksi/navbar');
        echo view('produksi/index');
        echo view('produksi/footer');
    }
    public function daftarPesanan()
    {
        $session = session();
        $pesananModel = new PesananModel();
        $data['DaftarPesanan'] = $pesananModel->getPesanan();
        echo view('produksi/header');
        echo view('produksi/navbar');
        echo view('produksi/pesanan_tabel', $data);
        echo view('produksi/footer');
    }
    public function daftarProduksi()
    {
        $session = session();
        $produksiModel = new ProduksiModel();
        $data['TabelProduksi'] = $produksiModel->getProduksi();
        echo view('produksi/header');
        echo view('produksi/navbar');
        echo view('produksi/produksi', $data);
        echo view('produksi/footer');
    }
    public function prosesPesanan($id)
    {
        $session = session();
        $pesananModel = new PesananModel();
        $data['Pesanan'] = $pesananModel->findPesanan($id);
        echo view('produksi/header');
        echo view('produksi/navbar');
        echo view('produksi/produksi_form_input', $data);
        echo view('produksi/footer');
    }
    public function saveProduksi()
    {
        $id_pesanan = $this->request->getPost('id_pesanan');
        $id_barang = $this->request->getPost('id_barang');
        $lead_time = $this->request->getPost('lead_time');
        $jumlah = $this->request->getPost('jumlah_produksi');
        $produksiModel = new ProduksiModel();
        $produksiModel->tambahProduksi($id_pesanan, $id_barang, $jumlah, $lead_time);
        $pesananModel = new PesananModel();
        $pesananModel->updateProses($id_pesanan);
        $this->daftarProduksi();
    }
}
