<?php

namespace App\Models;

use CodeIgniter\Model;

class Stok_M extends Model
{
    protected $table         = 'tbl_stok';
    protected $primaryKey    = 'id_stok';
    protected $allowedFields = ['barcode','id_barang', 'stok_awal', 'stok', 'tanggal_masuk', 'tanggal_kadaluarsa', 'ingat_kadaluarsa', 'created_at', 'updated_at'];
    protected $returnType    = 'App\Entities\Stok_E';
    protected $useTimestamps = true;
}