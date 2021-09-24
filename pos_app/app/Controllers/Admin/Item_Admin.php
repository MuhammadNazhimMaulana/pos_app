<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Transaksi_M;
use App\Entities\Transaksi_E;
use App\Models\Item_M;
use App\Models\User_M;
use App\Entities\Item_E;
use App\Models\Barang_M;

class Item_Admin extends BaseController
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

    public function input(){
        // Dapatkan Id dari segmen
        $id_transaksi = $this->request->uri->getSegment(4);

        $model = new Transaksi_M();

        $informasi = $model->join('tbl_users', 'tbl_users.username = tbl_transaksi.nama_kasir')->where('tbl_transaksi.id_transaksi', $id_transaksi)->first();

        // Dapatkan Semua data
        $model_barang = new Barang_M();
        $barang = $model_barang->findAll();
        $list_barang = ['0' => 'Pilih Satu'];

        // Buat looping
        foreach ($barang as $goods) {
            $list_barang[$goods->id_barang] = $goods->nama_barang;
        }

        // Mendapatkan data Item
        $model_item = new Item_M();

        $items = $model_item->join('tbl_barang', 'tbl_barang.id_barang = tbl_item_transaksi.id_barang')->join('tbl_transaksi', 'tbl_transaksi.id_transaksi = tbl_item_transaksi.id_transaksi')->where('tbl_item_transaksi.id_transaksi', $id_transaksi)->findAll();

        // Mendapatkan Total Bayar
        $total_bayar = $model_item->select('SUM(tbl_item_transaksi.total_item) AS jumlah')->get();

        $data = [
            'nama' => $this->session->get('username'),
            'informasi' => $informasi,
            'daftar_barang' => $list_barang,
            'item' => $items,
            'total' => $total_bayar->getResult()
        ];

        if ($this->request->getPost()) {
            // Jikalau ada data di post
            $data_item = $this->request->getPost();
            $this->validation->run($data_item, 'item');
            $errors = $this->validation->getErrors();

            if (!$errors) {

                // Simpan data
                $model = new Item_M();

               $item = new Item_E();
                
               // Fill untuk assign value data kecuali gambar
               $item->fill($data_item);

               //Input
               $item->created_at = date("Y-m-d H:i:s");

                $model->save($item);

                $segments = ['Admin', 'Item_Admin', 'input', $id_transaksi];

                // Akan redirect ke /Admin/Rak_A/view/$id_barang
                return redirect()->to(site_url($segments));

            }

            $this->session->setFlashdata('errors', $errors);
        }

            return view('Admin_View/Item_View/insert_item_transaksi', $data);     
    }

    public function action()
    {
        if($this->request->getVar('action'))
        {
            $action = $this->request->getVar('action');

            if($action == 'get_harga')
            {
                $model = new Barang_M();

                $data = $model->where('id_barang', $this->request->getVar('id_barang'))->first();

                echo json_encode($data);
            }
        }
    }

    public function update()
    {

    }

    public function delete()
    {
        $id_item = $this->request->uri->getSegment(4);

        $model = new Item_M();

        $delete = $model->delete($id_item);

        return redirect()->to(site_url('Admin/Item_Admin/input/'));
    }

}
