<?php

namespace App\Models;

use CodeIgniter\Model;

class Users extends Model
{
    protected $table = 'request_tbl';
    protected $allowedFields = ['first_name', 'middle_name', 'last_name', 'extension', 'purok_id', 'barangay_id', 'municipality_id', 'province_id', 'birth_date', 'birth_place','sex', 'citizenship', 'blood_id', 'physical_id', 'health', 'education_id', 'senior_email', 'cell_no', 'guardian_id', 'civil_id', 'religion_id'];

    public function getUsers()
    {
        return $this->findAll();
    }

    public function getOneUser($formData)
    {
        if(!$formData){
            return false;
        }

        return $this->where('senior_email', $formData['email'])->first();
    }
}
