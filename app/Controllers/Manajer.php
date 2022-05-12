<?php

namespace App\Controllers;

use App\Models\BarangModel;

class Manajer extends BaseController
{
    public function index()
    {
        $session = session();
        $barangModel = new BarangModel();
        $data['Barang'] = $barangModel->getBarangManajer();
        echo view('manager/header');
        echo view('manager/navbar');
        echo view('manager/bullwhip_tabel', $data);
        echo view('manager/footer');
    }
    public function dashboard()
    {
        $session = session();
        $barangModel = new BarangModel();
        $data['Barang'] = $barangModel->getBarangManajer();
        echo view('manager/header');
        echo view('manager/navbar');
        echo view('manager/bullwhip_grafik', $data);
        echo view('manager/footer');
    }
}
