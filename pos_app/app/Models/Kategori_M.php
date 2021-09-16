<?php

namespace App\Models;

use CodeIgniter\Model;

class Kategory_M extends Model
{
    protected $table         = 'tbl_kategori';
    protected $primaryKey    = 'id_kategori';
    protected $allowedFields = ['nama_kategori','slug_kategori', 'created_at', 'updated_at'];
    protected $returnType    = 'App\Entities\Kategori_E';
    protected $useTimestamps = true;
}