<?php

namespace App\Models;

use CodeIgniter\Model;

class Item_M extends Model
{
    protected $table         = 'tbl_item_transaksi';
    protected $primaryKey    = 'id_item';
    protected $allowedFields = ['id_transaksi','id_barang', 'qty', 'harga_item', 'total_item', 'created_at', 'updated_at'];
    protected $returnType    = 'App\Entities\Item_E';
    protected $useTimestamps = true;
}