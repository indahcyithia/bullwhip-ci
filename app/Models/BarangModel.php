<?php

namespace App\Models;

use CodeIgniter\Model;


class BarangModel extends Model
{
    protected $table = 'barang';

    protected $allowedFields = [
        'nama_bagian'
    ];

    public function getBarang()
    {
        $db = \Config\Database::connect();
        $query   = $db->query('SELECT * FROM barang ORDER BY nama_barang ASC');
        $results = $query->getResultArray();
        return $results;
    }
    public function hapusBarang($id)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('barang');
        $builder->delete(['id_barang' => $id]);
        return true;
    }
    public function tambahBarang($nama)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('barang');
        $builder->insert(['nama_barang' => $nama]);
        return true;
    }
    public function ubahBarang($id, $nama)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('barang');
        $builder->set('nama_barang', $nama);
        $builder->where('id_barang', $id);
        $builder->update();
        return true;
    }
    public function cariBarang($id)
    {
        $db = \Config\Database::connect();
        $sql = "SELECT * FROM barang WHERE id_barang = ? ";
        $results = $db->query($sql, $id)->getResultArray();

        return $results;
    }
}
