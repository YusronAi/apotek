<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function login()
    {
        return view('user/login');
    }

    public function register()
    {
        return view('user/register');
    }

    public function forgot()
    {
        return view('user/forgot-password');
    }
}
