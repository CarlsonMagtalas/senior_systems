<?php
namespace App\Controllers;

class Auth extends BaseController {
    public function index() {
    }

    public function login() {
        return view('auth/Login');
    }

    public function signup() {
        return view('auth/Signup');
    }

    public function verify() {
        helper('csrf');
        
        $email = $this->request->getPost('email');

    }
}