<?php

namespace App\Models;

use CodeIgniter\Model;

class Transaksi_M extends Model
{
    protected $table         = 'tbl_transaksi';
    protected $primaryKey    = 'id_transaksi';
    protected $allowedFields = ['nama_kasir','tanggal_transaksi', 'waktu_transaksi', 'keterangan', 'total_transaksi', 'total_bayar', 'ppn', 'total_ppn', 'kembalian', 'created_at', 'updated_at'];
    protected $returnType    = 'App\Entities\Transaksi_E';
    protected $useTimestamps = true;
}