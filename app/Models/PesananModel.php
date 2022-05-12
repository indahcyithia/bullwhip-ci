<?php

namespace App\Models;

use CodeIgniter\Model;


class PesananModel extends Model
{
    protected $table = 'pemesanan';

    protected $allowedFields = [
        'nama_bagian', 'id_barang', 'jumlah_pesanan'
    ];

    public function getPesanan()
    {
        $db = \Config\Database::connect();
        $query   = $db->query('SELECT pemesanan.id_pesanan, pemesanan.proses, pemesanan.nama_pemesan, 
        pemesanan.jumlah_pesanan, nama_barang FROM pemesanan JOIN barang USING (id_barang) Order By pemesanan.id_pesanan');

        $results = $query->getResultArray();
        return $results;
    }
    public function tambahPesanan($nama, $barang, $jumlah)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('pemesanan');
        $builder->insert([
            'nama_pemesan' => $nama,
            'id_barang' => $barang,
            'jumlah_pesanan' => $jumlah
        ]);
        return true;
    }
    public function updateProses($id_pesanan)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('pemesanan');
        $builder->set('proses', 1);
        $builder->where('id_pesanan', $id_pesanan);
        $builder->update();
        return true;
    }
    public function findPesanan($id)
    {
        $db = \Config\Database::connect();
        $sql = "SELECT * FROM pemesanan WHERE id_pesanan = ? ";
        $results = $db->query($sql, $id)->getResultArray();

        return $results;
    }
}
