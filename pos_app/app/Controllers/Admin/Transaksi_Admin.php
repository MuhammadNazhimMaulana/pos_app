<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Transaksi_M;
use App\Entities\Transaksi_E;
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

    public function home()
    {
        $model = new Transaksi_M();

        $data = [
            'data_transaksi' => $model
        ];

        return view('Admin_View/Transaksi_View/home_transaksi', $data);  
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

        $data = $this->request->getPost();

                // Simpan data
                $model = new Transaksi_M();

               $transaction = new Transaksi_E();
                
               // Fill untuk assign value data kecuali gambar
               $transaction->fill($data);

               //Input
               $transaction->nama_kasir = $this->session->get('username');
               $transaction->tanggal_transaksi = date("Y-m-d");
               $transaction->waktu_transaksi = date("H:i:s");
               $transaction->created_at = date("Y-m-d H:i:s");

                $model->save($transaction);

                $id_transaksi = $model->insertID();

                $segments = ['Admin', 'Item_Admin', 'input', $id_transaksi];

                // Akan redirect ke /Admin/Rak_A/view/$id_barang
                return redirect()->to(site_url($segments));
  
    }

    public function check_out()
    {        
        $id_transaksi = $this->request->uri->getSegment(4);

        $model = new Transaksi_M();

        // Dapatkan Post
        $data_perubahan = $this->request->getPost();

        $transactions = new Transaksi_E();
        $transactions->id_transaksi = $id_transaksi;
        $transactions->fill($data_perubahan);

        //Input Harga
        $transactions->updated_at = date("Y-m-d H:i:s");

        $model->save($transactions);

        $segments = ['Admin', 'Transaksi_Admin', 'pembayaran', $id_transaksi];

        return redirect()->to(site_url($segments));
    }

    public function pembayaran()
    {
        $id_transaksi = $this->request->uri->getSegment(4);

        $model = new Transaksi_M();

        // Mendapatkan data Transaksi
        $transaksi = $model->join('tbl_users', 'tbl_users.username = tbl_transaksi.nama_kasir')->where('tbl_transaksi.id_transaksi', $id_transaksi)->first();

        $data = [
            'transaksi' => $transaksi,
        ];
        
        return view('Admin_View/Transaksi_View/pembayaran_transaksi', $data);
    }
    
}
