<?php

namespace App\Models;

use CodeIgniter\Model;

class Users extends Model
{
    protected $table = 'senior_tbl';
    protected $allowedFields = [];

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
