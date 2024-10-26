<?php

namespace App\Models;

use CodeIgniter\Model;

class Barangay extends Model
{

    protected $table = 'barangay_tbl';

    public function getBarangay()
    {
        return $this->findAll();
    }

}