<?php

namespace App\Models;

use CodeIgniter\Model;

class Municipality extends Model
{
    protected $table = 'municipality_tbl';

    public function getMunicipality()
    {
        return $this->findAll();
    }
}