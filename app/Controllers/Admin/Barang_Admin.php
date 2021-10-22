<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Barang_M;
use App\Models\Harga_M;
use App\Entities\Barang_E;
use App\Models\Kategori_M;

class Barang_Admin extends BaseController
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
        $model = new Barang_M();

        $data = [
            'data_barang' => $model->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_barang.id_kategori')->paginate(10, 'barang'),
            'pager' => $model->pager,
            'title' => 'barang',
        ];

        return view('Admin_View/Barang_View/read_barang', $data);
    }

    public function view()
    {
        // Dapatkan Id dari segmen
        $id_barang = $this->request->uri->getSegment(4);

        $model = new Barang_M();

       $barang = $model->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_barang.id_kategori')->where('tbl_barang.id_barang', $id_barang)->first();

        // Data yang akan dikirim ke view specific
        $data = [
            "barang" => $barang,
            'title' => 'barang',
        ];

        return view('Admin_View/Barang_View/view_specific_barang', $data);
    }

    public function create()
    {
        // Dapatkan Semua data
        $model_kategori = new Kategori_M();
        $kategori = $model_kategori->findAll();
        $list_kategori = [];

        // Buat looping
        foreach ($kategori as $categories) {
            $list_kategori[$categories->id_kategori] = $categories->nama_kategori;
        }

        $data_barang = [
            'title' => 'barang',
            'daftar_kategori' => $list_kategori,
        ];

        if ($this->request->getPost()) {
            // Jikalau ada data di post
            $data = $this->request->getPost();
            $this->validation->run($data, 'barang');
            $errors = $this->validation->getErrors();

            if (!$errors) {

                // Simpan data
                $model = new Barang_M();

               $barang = new Barang_E();

                // Fill untuk assign value data kecuali gambar
               $barang->fill($data);
               $barang->foto_barang = $this->request->getFile('foto_barang');
               $barang->created_at = date("Y-m-d H:i:s");

                $model->save($barang);

                $id_barang = $model->insertID();

                $segments = ['admin', 'goods', 'view', $id_barang];

                // Akan redirect ke /Admin/Rak_A/view/$id_barang
                return redirect()->to(site_url($segments));
            }

            $this->session->setFlashdata('errors', $errors);
        }
        return view('Admin_View/Barang_View/insert_barang', $data_barang);
    }

    public function update()
    {
        $id_barang = $this->request->uri->getSegment(4);

        $model = new Barang_M();

       $barang = $model->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_barang.id_kategori')->where('tbl_barang.id_barang', $id_barang)->first();

        // Dapatkan Satu data Harga Spesifik
        $model_harga = new Harga_M();
        $harga = $model_harga->join('tbl_barang', 'tbl_barang.id_barang = tbl_harga.id_barang')->where('tbl_harga.id_barang', $id_barang)->first();

        // Dapatkan Semua data
        $model_kategori = new Kategori_M();
        $kategori = $model_kategori->findAll();
        $list_kategori = [];

        // Buat looping
        foreach ($kategori as $categories) {
            $list_kategori[$categories->id_kategori] = $categories->nama_kategori;
        }

        $data_barang = [
            'barang' =>$barang,
            'daftar_kategori' => $list_kategori,
            'harga' => $harga,
            'title' => 'barang',
        ];

        if ($this->request->getPost()) {
            $data = $this->request->getPost();
            $this->validation->run($data, 'barang_update');
            $errors = $this->validation->getErrors();

            if (!$errors) {

               $barang = new Barang_E();
               $barang->id_barang = $id_barang;
               $barang->fill($data);

               if ($this->request->getFile('foto_barang')->isValid()) {
                $barang->foto_barang = $this->request->getFile('foto_barang');
            }

               $barang->updated_at = date("Y-m-d H:i:s");

                $model->save($barang);

                $segments = ['admin', 'goods', 'view', $id_barang];

                return redirect()->to(site_url($segments));
            }
        }

        return view('Admin_View/Barang_View/update_barang', $data_barang);
    }

    public function delete()
    {
        $id_barang = $this->request->uri->getSegment(4);

        $model = new Barang_M();

        $delete = $model->delete($id_barang);

        return redirect()->to(base_url('admin/goods'));
    }
}
