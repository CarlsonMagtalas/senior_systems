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

    public function verify_login() {
        #declare our response
        $response = [
            'success' => false,
            'message' => ''
        ];
        $user_model = model(Users::class); #define our user_model

        #get the post data
        $formData = $this->request->getPost();

        if($formData){
            #check if user exists
            $db_data = $user_model->getOneUser($formData);
    
            if(!$db_data){
                $response['message'] = 'an error occurred';

                return $this->response->setJSON($response);
            }

            $hashedPass = password_hash($db_data['senior_password'], PASSWORD_DEFAULT);

            if(password_verify($formData['password'], $hashedPass)){
                $response['success'] = true;
                $response['message'] = 'Successfully logged in';

                return $this->response->setJSON($response);
            } else {
                $response['message'] = 'incorrect credentials';
                return $this->response->setJSON($response);
            }
            
            // return $this->response->setContentType('application/json')->setBody(json_encode(['success' => true, 'data' => $db_data]));
        }


    }

    public function verify_signup() {
        $formData = $this->request->getPost();

        $hashedPass = password_hash($formData['password'], PASSWORD_DEFAULT);

        return $this->response->setJSON(['password' => $formData['password'], 'hashed password' => $hashedPass]);
    }
}