<?php

namespace App\Models;

use CodeIgniter\Model;

class Barang_M extends Model
{
    protected $table         = 'tbl_barang';
    protected $primaryKey    = 'id_barang';
    protected $allowedFields = ['id_kategori', 'nama_barang', 'harga_barang', 'foto_barang', 'status', 'created_at', 'updated_at'];
    protected $returnType    = 'App\Entities\Barang_E';
    protected $useTimestamps = true;
}