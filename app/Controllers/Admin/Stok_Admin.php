<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Stok_M;
use App\Entities\Stok_E;
use App\Models\Barang_M;
use App\Entities\Barang_E;

class Stok_Admin extends BaseController
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

    public function read()
    {
        $model = new Stok_M();

        $data = [
            'data_stok' => $model->join('tbl_barang', 'tbl_barang.id_barang = tbl_stok.id_barang')->paginate(10, 'stok'),
            'pager' => $model->pager,
            'title' => 'stok',
        ];

        return view('Admin_View/Stok_View/read_stok', $data);
    }

    public function view()
    {
        // Dapatkan Id dari segmen
        $id_stok = $this->request->uri->getSegment(4);

        $model = new Stok_M();

        $stok = $model->join('tbl_barang', 'tbl_barang.id_barang = tbl_stok.id_barang')->where('tbl_stok.id_stok', $id_stok)->first();

        // Data yang akan dikirim ke view specific
        $data = [
            "stock" =>$stok,
            "title" => 'Stok',
            'title' => 'stok',
        ];

        return view('Admin_View/Stok_View/view_specific_stok', $data);
    }

    public function create()
    {
        // Dapatkan Semua data
        $model_barang = new Barang_M();
        $barang = $model_barang->findAll();
        $list_barang = [];

        // Buat looping
        foreach ($barang as $goods) {
            $list_barang[$goods->id_barang] = $goods->nama_barang;
        }

        $data_stok = [
            "title" => 'Stok',
            'daftar_barang' => $list_barang,
            'title' => 'stok',
        ];

        if ($this->request->getPost()) {
            // Jikalau ada data di post
            $data = $this->request->getPost();
            $this->validation->run($data, 'stok');
            $errors = $this->validation->getErrors();

            if (!$errors) {

                // Simpan data
                $model = new Stok_M();

               $stock = new Stok_E();
                
               // Fill untuk assign value data kecuali gambar
               $stock->fill($data);

               //Input
               $stock->created_at = date("Y-m-d H:i:s");

                $model->save($stock);

                $id_stok = $model->insertID();

                $segments = ['admin', 'stocks', 'view', $id_stok];

                // Akan redirect ke /Admin/Rak_A/view/$id_barang
                return redirect()->to(site_url($segments));
            }

            $this->session->setFlashdata('errors', $errors);
        }
        return view('Admin_View/Stok_View/insert_stok', $data_stok);
    }

    public function update()
    {
        $id_stok = $this->request->uri->getSegment(4);

        $model = new Stok_M();

        $stok = $model->join('tbl_barang', 'tbl_barang.id_barang = tbl_stok.id_barang')->where('tbl_stok.id_stok', $id_stok)->first();
        
        // Dapatkan Semua data
        $model_barang = new Barang_M();
        $barang = $model_barang->findAll();
        $list_barang = [];

        // Buat looping
        foreach ($barang as $goods) {
            $list_barang[$goods->id_barang] = $goods->nama_barang;
        }

        $data = [
            'stock' =>$stok,
            "title" => 'Stok',
            'daftar_barang' => $list_barang,
            'title' => 'stok',
        ];

        if ($this->request->getPost()) {
            $data_stok = $this->request->getPost();
            $this->validation->run($data_stok, 'stok_update');
            $errors = $this->validation->getErrors();

            if (!$errors) {
               $stock = new Stok_E();
               $stock->id_stok = $id_stok;
               $stock->fill($data_stok);

                //Input Harga
               $stock->updated_at = date("Y-m-d H:i:s");

                $model->save($stock);

                $segments = ['admin', 'stocks', 'view', $id_stok];

                return redirect()->to(site_url($segments));
            }
        }

        return view('Admin_View/Stok_View/update_stok', $data);
    }

    public function delete()
    {
        $id_stok = $this->request->uri->getSegment(4);

        $model = new Stok_M();

        $delete = $model->delete($id_stok);

        return redirect()->to(site_url('admin/stocks'));
    }
}
