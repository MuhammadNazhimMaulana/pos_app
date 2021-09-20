<?php

namespace App\Models;

use CodeIgniter\Model;

class User_M extends Model
{
    protected $table         = 'tbl_user';
    protected $primaryKey    = 'username';
    protected $allowedFields = ['username','nama_lengkapa', 'tingkat', 'alamat', 'password', 'usia', 'foto_user', 'tgl_masuk', 'created_at', 'updated_at'];
    protected $returnType    = 'App\Entities\User_E';
    protected $useTimestamps = true;
    protected $useAutoIncrement = false;
}