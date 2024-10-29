<?php

namespace App\Models;

use CodeIgniter\Model;

class Religion extends Model
{
    protected $table = 'religion_tbl';

    public function getReligion()
    {
        return $this->findAll();
    }
}