<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Harga_M;
use App\Entities\Harga_E;
use App\Models\Barang_M;

class Transaksi_Admin extends BaseController
{
    public function __construct()
    {
        // Memanggil Helper
        helper('form');

        // Load Validasi
        $this->validation = \Config\Services::validation();

        // Load Session
        $this->session = session();
    }

    public function home(){

        return view('Admin_View/Transaksi_View/home_transaksi');  
    }

    public function read()
    {
        $model = new Harga_M();

        $data = [
            'data_transaksi' => $model->join('tbl_item_transaksi', 'tbl_item_transaksi.id_transaksi = tbl_transaksi.id_transaksi')->join('tbl_barang', 'tbl_item_transaksi.id_barang = tbl_barang.id_barang')->paginate(10, 'transaksi'),
            'pager' => $model->pager,
        ];

        return view('Admin_View/Transaksi_View/read_transaksi', $data);
    }

    public function insert(){

        return view('Admin_View/Transaksi_View/insert_transaksi');     
    }

}
