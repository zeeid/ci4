<?php

namespace App\Models;

use CodeIgniter\Model;

class CobaModel extends Model
{
    // ======KONFIGURASI MODEL ==============
    protected $table      = 'komik';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    // protected $useSoftDeletes = false;
    // protected $deletedField  = 'deleted_at';

    protected $allowedFields = ['nama', 'isi','foto'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;
}