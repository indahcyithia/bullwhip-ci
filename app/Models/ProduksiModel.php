<?php

namespace App\Models;

use CodeIgniter\Model;


class ProduksiModel extends Model
{
    protected $table = 'produksi';

    protected $allowedFields = [
        'id_pesanan', 'id_barang', 'jumlah_produksi', 'lead_time'
    ];

    public function getProduksi()
    {
        $db = \Config\Database::connect();
        $query   = $db->query('SELECT nama_pemesan, id_pesanan, nama_barang, jumlah_pesanan, jumlah_produksi, lead_time
        FROM produksi
        NATURAL JOIN pemesanan
        NATURAL JOIN barang
        ORDER BY id_pesanan ASC');

        $results = $query->getResultArray();
        return $results;
    }
    public function tambahProduksi($id_pesanan, $id_barang, $jumlah, $lead_time)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('produksi');
        $builder->insert([
            'id_pesanan' => $id_pesanan,
            'id_barang' => $id_barang,
            'jumlah_produksi' => $jumlah,
            'lead_time' => $lead_time
        ]);
        return true;
    }
}
