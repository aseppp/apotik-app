<?php

namespace App\Controllers;

// INI CONTROLLER

class Home extends BaseController
{
    public function index()
    {
        return view('auth/login');
    }
    
    public function register()
    {
        return view('auth/register');
    }
    public function admin()
    {
        return view('admin/index');
    }
}
