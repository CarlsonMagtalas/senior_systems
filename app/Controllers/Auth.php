<?php
namespace App\Controllers;

use App\Models\Users;

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
        $user_model = model(Users::class); #define our user_model

        #get the post data
        $formData = $this->request->getPost();

        $db_data = $user_model->getOneUser($formData);

        if(!$db_data){
            return json_encode(['success' => false, 'message' => 'an error occurred']);
        }

        return $this->response->setContentType('application/json')->setBody(json_encode(['success' => true, 'data' => $db_data]));

    }
}