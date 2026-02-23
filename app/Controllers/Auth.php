<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends BaseController
{
    public function index()
    {
        return view('login');
    }


    // login
    public function login()
    {
        $session = session();

        $validation = \Config\Services::validation();
        $validation->setRules([
            'username' => 'required',
            'password' => 'required|min_length[8]'
        ]);

        if ($validation->withRequest($this->request)->run() == false) {
            return view('login', ['validation' => $validation]);
        } else {
            $username = $this->request->getPost('username');

            $userModel = new UserModel();
            $user = $userModel->where('username', $username)->first();
            if ($user) {
                if (password_verify($this->request->getPost('password'), $user['password'])) {

                    $sessionData = [
                        'id_user' => $user['id_user'],
                        'username' => $user['username'],
                        'logged_in' => true
                    ];

                    $session->set($sessionData);
                    return redirect()->to('/dashboard');
                }
            } else {
                return redirect()->to('/login')->with('error', 'Username Tidak Ditemukan');
            }
        }
    }

    // register
    public function register()
    {
        return view('login');
    }

    public function daftar()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'username' => 'required',
            'password' => 'required|min_length[8]'
        ]);

        if ($validation->withRequest($this->request)->run() == false) {
            return view('login', ['validation' => $validation]);
        }

        $userModel = new UserModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // membuat password hash
        $password_hashed = password_hash($password, PASSWORD_BCRYPT);
        $userModel->insert([
            'username' => $username,
            'password' => $password_hashed
        ]);

        return redirect()->to('login');
    }


    //    logout
    public function logout()
    {
        $session = session();
        $session->destroy();;

        return redirect()->to('login');
    }
}

