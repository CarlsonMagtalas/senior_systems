<?php

namespace App\Models;

use CodeIgniter\Model;

class Education extends Model
{
    protected $table = 'education_tbl';

    public function getEducation()
    {
        return $this->findAll();
    }
}