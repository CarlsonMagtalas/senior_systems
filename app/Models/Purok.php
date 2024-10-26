<?php

namespace App\Models;

use CodeIgniter\Model;

class Purok extends Model
{
    protected $table = 'purok_tbl';

    public function getPurok()
    {
        return $this->findAll();
    }
}