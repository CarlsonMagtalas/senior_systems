<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home_page/HomePage');
    }

    public function login() {
        return view('auth/login');
    }
}
