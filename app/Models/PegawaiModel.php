<?php

namespace App\Models;

use CodeIgniter\Model;


class PegawaiModel extends Model
{
    protected $table = 'pegawai';

    protected $allowedFields = [
        'username', 'password', 'nama_pegawai', 'alamat_pegawai', 'hp_pegawai', 'id_bagian'
    ];

    public function getPegawai()
    {
        $db = \Config\Database::connect();
        $query   = $db->query('SELECT id_pegawai, username, password, nama_pegawai, alamat_pegawai, hp_pegawai, nama_bagian FROM pegawai NATURAL JOIN bagian ORDER BY nama_pegawai ASC');
        $results = $query->getResultArray();
        return $results;
    }
    public function hapusPegawai($id)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('pegawai');
        $builder->delete(['id_pegawai' => $id]);
        return true;
    }
    public function tambahPegawai($username, $password, $nama_pegawai, $alamat_pegawai, $hp_pegawai, $id_bagian)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('pegawai');
        $builder->insert([
            'username' => $username,
            'password' => $password,
            'nama_pegawai' => $nama_pegawai,
            'alamat_pegawai' => $alamat_pegawai,
            'hp_pegawai' => $hp_pegawai,
            'id_bagian' => $id_bagian
        ]);
        return true;
    }
    public function ubahPegawai($id_pegawai, $username, $password, $nama_pegawai, $alamat_pegawai, $hp_pegawai, $id_bagian)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('pegawai');
        $builder->set('username', $username);
        $builder->set('password', $password);
        $builder->set('nama_pegawai', $nama_pegawai);
        $builder->set('alamat_pegawai', $alamat_pegawai);
        $builder->set('hp_pegawai', $hp_pegawai);
        $builder->set('id_bagian', $id_bagian);
        $builder->where('id_pegawai', $id_pegawai);
        $builder->update();
        return true;
    }
    public function cariPegawai($id)
    {
        $db = \Config\Database::connect();
        $sql = "SELECT * FROM pegawai WHERE id_pegawai = ? ";
        $results = $db->query($sql, $id)->getResultArray();

        return $results;
    }
}
