<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }
    public function logout()
    {
        $session = session();
        session_abort();
        return view('index');
    }
    public function login()
    {
        $session = session();
        $username = $this->request->getPost('username');
        $pass = $this->request->getPost('password');
        $userModel = new UserModel();
        $data = $userModel->where('username', $username)->first();
        if ($data) {
            // $password = $data->password;
            // $authenticatePassword = password_verify($pass, $data["password"]);
            if ($pass == $data["password"]) {
                $ses_data = [
                    'id' => $data['id_pegawai'],
                    'username' => $data['username'],
                    'name' => $data['nama_pegawai'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                if ($data['id_bagian'] == 7) {
                    return redirect()->to(base_url('/Admin'));
                } else if ($data['id_bagian'] == 8) {
                    return redirect()->to(base_url('/Manajer'));
                } else if ($data['id_bagian'] == 9) {
                    return redirect()->to(base_url('/Gudang'));
                }
            } else {
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to(base_url('/'));
            }
        } else {
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to(base_url('/'));
        }
    }
}
