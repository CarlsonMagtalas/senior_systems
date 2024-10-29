<?php

namespace App\Models;

use CodeIgniter\Model;

class Disability extends Model
{
    protected $table = 'physical_tbl';

    public function getDisability()
    {
        return $this->findAll();
    }
}