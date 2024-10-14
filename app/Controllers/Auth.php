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
        $post_data = $this->request->getPost();
        return json_encode(['success' => true, 'message' => $post_data['email']]);
    }
}