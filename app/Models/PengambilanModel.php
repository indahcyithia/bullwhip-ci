<?php

namespace App\Models;

use CodeIgniter\Model;


class PengambilanModel extends Model
{
    protected $table = 'pengambilan';

    protected $allowedFields = [
        'nama_pengambil', 'id_barang', 'jumlah_pengambilan'
    ];

    public function getPengambilan()
    {
        $db = \Config\Database::connect();
        $query   = $db->query('SELECT pengambilan.nama_pengambil, barang.nama_barang, pengambilan.jumlah_pengambilan FROM pengambilan JOIN barang ON pengambilan.id_barang = barang.id_barang');
        $results = $query->getResultArray();
        return $results;
    }
    public function tambahPengambilan($nama, $barang, $jumlah)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('pengambilan');
        $builder->insert([
            'nama_pengambil' => $nama,
            'id_barang' => $barang,
            'jumlah_pengambilan' => $jumlah
        ]);
        return true;
    }
}
