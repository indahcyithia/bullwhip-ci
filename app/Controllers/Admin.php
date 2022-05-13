<?php

namespace App\Controllers;

use App\Models\BagianModel;
use App\Models\BarangModel;
use App\Models\PegawaiModel;

class Admin extends BaseController
{
    public function index()
    {
        $session = session();
        echo view('Admin/navbar');
        echo view('Admin/index');
    }

    public function barang()
    {
        $session = session();
        $barangModel = new BarangModel();
        $data['Barang'] = $barangModel->getBarang();
        echo view('Admin/header');
        echo view('Admin/navbar');
        echo view('Admin/barang/barang_tambah');
        echo view('Admin/barang/barang_tabel', $data);
        echo view('Admin/footer');
    }
    public function tambahBarang()
    {
        $session = session();
        echo view('Admin/header');
        echo view('Admin/navbar');
        echo view('Admin/barang/form_2_barang');
        echo view('Admin/footer');
    }
    public function saveBarang()
    {
        $session = session();
        $barangModel = new BarangModel();
        $nama = $this->request->getPost('nama_barang');
        $barangModel->tambahBarang($nama);
        $session->set('status', 'succes');
        $this->barang();
    }

    public function ubahBarang($id)
    {
        $session = session();
        $barangModel = new BarangModel();
        $data['Barang'] = $barangModel->cariBarang($id);
        echo view('Admin/header');
        echo view('Admin/navbar');
        echo view('Admin/barang/barang_edit', $data);
        echo view('Admin/footer');
    }
    public function updateBarang()
    {
        $session = session();
        $barangModel = new BarangModel();
        $id = $this->request->getPost('id_barang');
        $nama = $this->request->getPost('nama_barang');
        $barangModel->ubahBarang($id, $nama);
        $session->set('status', 'succes');
        $this->barang();
    }
    public function deleteBarang($id = 0)
    {
        $session = session();
        $barangModel = new BarangModel();
        $data['Barang'] = $barangModel->hapusBarang($id);
        $session->set('status', 'delete');
        $this->barang();
    }


    public function bagian()
    {
        $session = session();
        $bagianModel = new BagianModel();
        $data['bagian'] = $bagianModel->getBagian();
        echo view('Admin/header');
        echo view('Admin/navbar');
        echo view('Admin/bagian/bagian_tambah');
        echo view('Admin/bagian/bagian_tabel', $data);
        echo view('Admin/footer');
    }
    public function deleteBagian($id = 0)
    {
        $session = session();
        $bagianModel = new BagianModel();
        $data['bagian'] = $bagianModel->hapusBagian($id);
        $session->set('status', 'delete');
        $this->bagian();
    }
    public function tambahBagian()
    {
        $session = session();
        echo view('Admin/header');
        echo view('Admin/navbar');
        echo view('Admin/bagian/form_1_bagian');
        echo view('Admin/footer');
    }
    public function saveBagian()
    {
        $session = session();
        $bagianModel = new BagianModel();
        $nama = $this->request->getPost('nama_bagian');
        $bagianModel->tambahBagian($nama);
        $session->set('status', 'succes');
        $this->bagian();
    }
    public function ubahBagian($id)
    {
        $session = session();
        $bagianModel = new BagianModel();
        $data['bagian'] = $bagianModel->cariBagian($id);
        echo view('Admin/header');
        echo view('Admin/navbar');
        echo view('Admin/bagian/bagian_edit', $data);
        echo view('Admin/footer');
    }
    public function updateBagian()
    {
        $session = session();
        $bagianModel = new BagianModel();
        $id = $this->request->getPost('id_bagian');
        $nama = $this->request->getPost('nama_bagian');
        $bagianModel->ubahBagian($id, $nama);
        $session->set('status', 'succes');
        $this->bagian();
    }

    public function pegawai()
    {
        $session = session();
        $pegawaiModel = new PegawaiModel();
        $data['Pegawai'] = $pegawaiModel->getPegawai();
        echo view('Admin/header');
        echo view('Admin/navbar');
        echo view('Admin/pegawai/pegawai_tambah');
        echo view('Admin/pegawai/pegawai_tabel', $data);
        echo view('Admin/footer');
    }
    public function deletePegawai($id = 0)
    {
        $session = session();
        $pegawaiModel = new PegawaiModel();
        $data['pegawai'] = $pegawaiModel->hapusPegawai($id);
        $session->set('status', 'delete');
        $this->pegawai();
    }
    public function tambahPegawai()
    {
        $session = session();
        $bagianModel = new BagianModel();
        $data['bagian'] = $bagianModel->getBagian();
        echo view('Admin/header');
        echo view('Admin/navbar');
        echo view('Admin/pegawai/form_3_pegawai', $data);
        echo view('Admin/footer');
    }
    public function savePegawai()
    {
        $session = session();
        $pegawaiModel = new PegawaiModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $nama_pegawai = $this->request->getPost('nama_pegawai');
        $alamat_pegawai = $this->request->getPost('alamat_pegawai');
        $hp_pegawai = $this->request->getPost('hp_pegawai');
        $id_bagian = $this->request->getPost('id_bagian');
        $pegawaiModel->tambahPegawai(
            $username,
            $password,
            $nama_pegawai,
            $alamat_pegawai,
            $hp_pegawai,
            $id_bagian
        );
        $session->set('status', 'succes');
        $this->pegawai();
    }
    public function ubahPegawai($id)
    {
        $session = session();
        $pegawaiModel = new PegawaiModel();
        $data['Pegawai'] = $pegawaiModel->cariPegawai($id);
        $bagianModel = new BagianModel();
        $data['bagian'] = $bagianModel->getBagian();
        echo view('Admin/header');
        echo view('Admin/navbar');
        echo view('Admin/pegawai/pegawai_edit', $data);
        echo view('Admin/footer');
    }
    public function updatePegawai()
    {
        $session = session();
        $pegawaiModel = new PegawaiModel();
        $id_pegawai = $this->request->getPost('id_pegawai');
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $nama_pegawai = $this->request->getPost('nama_pegawai');
        $alamat_pegawai = $this->request->getPost('alamat_pegawai');
        $hp_pegawai = $this->request->getPost('hp_pegawai');
        $id_bagian = $this->request->getPost('id_bagian');
        $pegawaiModel->ubahPegawai(
            $id_pegawai,
            $username,
            $password,
            $nama_pegawai,
            $alamat_pegawai,
            $hp_pegawai,
            $id_bagian
        );
        $session->set('status', 'succes');
        $this->pegawai();
    }
}
