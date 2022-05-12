<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'pegawai';

    protected $allowedFields = [
        'username',
        'password',
        'nama_pegawai',
        'alamat_pegawai',
        'hp_pegawai',
        'id_bagian'
    ];
}
