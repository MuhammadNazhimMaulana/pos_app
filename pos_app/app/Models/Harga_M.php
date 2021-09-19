<?php

namespace App\Models;

use CodeIgniter\Model;

class Harga_M extends Model
{
    protected $table         = 'tbl_harga';
    protected $primaryKey    = 'id_harga';
    protected $allowedFields = ['id_barang', 'range_1', 'range_2', 'harga', 'nama_harga', 'created_at', 'updated_at'];
    protected $returnType    = 'App\Entities\Harga_E';
    protected $useTimestamps = true;
}