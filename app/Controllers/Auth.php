<?php

namespace App\Controllers;

use App\Models\Users;

class Auth extends BaseController
{
    #declare our response
    protected $response = [
        'success' => false,
        'message' => ''
    ];

    public function index() {}

    public function login()
    {
        return view('auth/Login');
    }

    public function signup()
    {
        return view('auth/Signup');
    }

    public function verify_login()
    {
        
        $user_model = model(Users::class); #define our user_model

        #get the post data
        $formData = $this->request->getPost();

        if ($formData) {
            #check if user exists
            $db_data = $user_model->getOneUser($formData);

            $security = \Config\Services::security();
            $csrf_hash = $security->generateHash();

            if (!$db_data) {
                $response['message'] = 'an error occurred';
                $response['csrf_test_name'] = $csrf_hash;

                return $this->response->setJSON($response);
            }

            $hashedPass = password_hash($db_data['senior_password'], PASSWORD_DEFAULT);

            if (password_verify($formData['password'], $hashedPass)) {
                $response['success'] = true;
                $response['message'] = 'Successfully logged in';

                return $this->response->setJSON($response);
            } else {
                $response['message'] = 'incorrect credentials';
                $response['csrf_test_name'] = $csrf_hash; #return the token

                return $this->response->setJSON($response);
            }

            // return $this->response->setContentType('application/json')->setBody(json_encode(['success' => true, 'data' => $db_data]));
        }
    }

    public function verify_signup()
    {
        $formData = $this->request->getPost();

        $security = \Config\Services::security();
        $csrf_hash = $security->generateHash();

        $hashedPass = password_hash($formData['password'], PASSWORD_DEFAULT);
        
        $response['success'] = true;
        $response['message'] = $hashedPass;
        $response['csrf_test_name'] = $csrf_hash; #return the token
        
        return $this->response->setJSON($response);
    }
}
