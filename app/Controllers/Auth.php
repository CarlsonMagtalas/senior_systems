<?php

namespace App\Controllers;

#import address models
use App\Models\Barangay;
use App\Models\Municipality;
use App\Models\Province;
use App\Models\Purok;

use App\Models\Disability;
use App\Models\Blood;
use App\Models\Religion;
use App\Models\Education;
use App\Models\Civil;
use App\Models\Users;

#import custom email library
use App\Libraries\EmailService;

$db = \Config\Database::connect();

class Auth extends BaseController
{
    #declare our response
    protected $response = [
        'success' => false,
        'message' => ''
    ];

    public function __construct() {}

    public function moveFiles($file, $fileDestination)
    {
        $fileName = $file->getRandomName();
        #if the file is valid and it has not been moved
        if ($file->isValid() && !$file->hasMoved()) {
            $file->move($fileDestination, $fileName);
        }
        return $fileName;
    }

    public function index() {}

    public function login()
    {
        return view('auth/Login');
    }

    public function signup()
    {
        #Address Models here
        $purok_model = new Purok();
        $barangay_model = new Barangay();
        $municipality_model = new Municipality();
        $province_model = new Province();

        $purok = $purok_model->getPurok();
        $barangay = $barangay_model->getBarangay();
        $municipality = $municipality_model->getMunicipality();
        $province = $province_model->getProvince();
        $address = [
            'purok' => $purok,
            'barangay' => $barangay,
            'municipality' => $municipality,
            'province' => $province
        ];

        #Health Model here
        $disability_model = new Disability();
        $blood_model = new Blood();

        $disabilities = $disability_model->getDisability();
        $blood = $blood_model->getBlood();
        $health = [
            'disabilities' => $disabilities,
            'blood' => $blood
        ];

        #Other models
        $religion_model = new Religion();
        $educ_model = new Education();
        $civil_model = new Civil();

        $religion = $religion_model->getReligion();
        $educ = $educ_model->getEducation();
        $civil = $civil_model->getCivil();
        $other = [
            'religion' => $religion,
            'education' => $educ,
            'civil' => $civil
        ];

        $data = [
            'address' => $address,
            'health' => $health,
            'other' => $other
        ];

        return view('auth/Signup', $data);
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
        $user_model = new Users();

        $formData = $this->request->getPost();

        $security = \Config\Services::security();
        $csrf_hash = $security->generateHash();

        #declare all files uploaded
        $id_pic = $this->request->getFile('id_pic');
        $birth_cert = $this->request->getFile('birth_certificate');
        $barangay_cert = $this->request->getFile('barangay_certificate');

        #declare their paths
        $public_path = FCPATH . "uploads/";
        $private_path = WRITEPATH . "uploads/";
        $id_path = "{$public_path}id_pic";
        $birth_path = "{$private_path}birth_certificate";
        $barangay_path = "{$private_path}barangay_certificate";

        #move the files
        $id_name = $this->moveFiles($id_pic, $id_path);
        $birth_name = $this->moveFiles($birth_cert, $birth_path);
        $barangay_name = $this->moveFiles($barangay_cert, $barangay_path);

        #add additional data to formData
        $formData['id_pic'] = $id_name;
        $formData['birth_certificate'] = $birth_name;
        $formData['barangay_certificate'] = $barangay_name;
        $formData['guardian_id'] = 1;

        #insert into database
        $user_id = $user_model->insert($formData);

        if ($user_id) {
            $email = new EmailService();
            $subject = "Request for Account";
            $to = $formData['senior_email'];
            $message = "Account request successful, please wait for further updates";

            $sent = $email->sendEmail($to, $message, $subject);

            if ($sent == true) {
                $response['success'] = true;
                $response['message'] = $formData;
                $response['user_id'] = $user_id;
                $response['csrf_test_name'] = $csrf_hash; #return the token
            }
        }


        return $this->response->setJSON($response);
    }
}
