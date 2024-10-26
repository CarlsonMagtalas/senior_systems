<?php

namespace App\Models;

use CodeIgniter\Model;

class Province extends Model 
{
    protected $table = 'province_tbl';

    public function getProvince()
    {
        return $this->findAll();
    }
}