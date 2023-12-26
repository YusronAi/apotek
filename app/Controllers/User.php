<?php

namespace App\Controllers;

use App\Models\userModel;

class User extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new userModel();
    }
    public function login()
    {
        $data = [
            'user' => $this->userModel->findAll()
        ];

        return view('user/login', $data);
    }

    public function auth()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');


        if ($username) {
            $user = $this->userModel->cari($username)->first();

            if ($user) {
                if ($password == $user['password']) {
                    $set = session();
                    $set->set('login', $user);
                    return redirect()->to('');
                } else {
                    return redirect()->to("/login");
                }
            } else {
                return redirect()->to('/login');
            }
        }
    }

    public function save()
    {
        $this->userModel->save(
            [
                'username' => $this->request->getVar('username'),
                'password' => $this->request->getVar('password'),
                'alamat' => $this->request->getVar('alamat')
            ]
            );

        return redirect()->to('/login');
    }

    public function logout()
    {
        $set = session();

        $set->remove('login');
        $set->destroy();

        return redirect()->to('/login');
    }

    public function users()
    {
        $users = $this->userModel->All();

        $data = [
            'title' => 'Users',
            'users' => $users
        ];

        return view('user/users', $data);
    }
}
