<?php

namespace App\Models;

use CodeIgniter\Model;

class Blood extends Model
{
    protected $table = 'blood_tbl';

    public function getBlood()
    {
        return $this->findAll();
    }
}