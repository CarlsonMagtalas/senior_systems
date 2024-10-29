<?php

namespace App\Models;

use CodeIgniter\Model;

class Civil extends Model
{
    protected $table = 'civil_tbl';

    public function getCivil()
    {
        return $this->findAll();
    }
}