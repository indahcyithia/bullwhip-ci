<?php

namespace App\Models;

use CodeIgniter\Model;


class BagianModel extends Model
{
    protected $table = 'bagian';

    protected $allowedFields = [
        'nama_bagian'
    ];

    public function getBagian()
    {
        $db = \Config\Database::connect();
        $query   = $db->query('SELECT * FROM bagian ORDER BY nama_bagian ASC');
        $results = $query->getResultArray();
        return $results;
    }
    public function hapusBagian($id)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('bagian');
        $builder->delete(['id_bagian' => $id]);
        return true;
    }
    public function tambahBagian($nama)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('bagian');
        $builder->insert(['nama_bagian' => $nama]);
        return true;
    }
    public function ubahBagian($id, $nama)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('bagian');
        $builder->set('nama_bagian', $nama);
        $builder->where('id_bagian', $id);
        $builder->update();
        return true;
    }
    public function cariBagian($id)
    {
        $db = \Config\Database::connect();
        $sql = "SELECT * FROM bagian WHERE id_bagian = ? ";
        $results = $db->query($sql, $id)->getResultArray();

        return $results;
    }
}
