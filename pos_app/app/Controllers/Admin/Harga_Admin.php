<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Harga_M;
use App\Entities\Harga_E;
use App\Models\Barang_M;

class Harga_Admin extends BaseController
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
        $model = new Harga_M();

        $data = [
            'data_harga' => $model->join('tbl_barang', 'tbl_barang.id_barang = tbl_harga.id_barang')->paginate(10, 'harga'),
            'pager' => $model->pager,
        ];

        return view('Admin_View/Harga_View/read_harga', $data);
    }

    public function view()
    {
        // Dapatkan Id dari segmen
        $id_harga = $this->request->uri->getSegment(4);

        $model = new Harga_M();

        $harga = $model->join('tbl_barang', 'tbl_barang.id_barang = tbl_harga.id_barang')->where('tbl_harga.id_harga', $id_harga)->first();

        // Data yang akan dikirim ke view specific
        $data = [
            "prize" =>$harga,
            "title" => 'Harga'
        ];

        return view('Admin_View/Harga_View/view_specific_harga', $data);
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

        $data_harga = [
            "title" => 'Harga',
            'daftar_barang' => $list_barang,
        ];

        if ($this->request->getPost()) {
            // Jikalau ada data di post
            $data = $this->request->getPost();
            $this->validation->run($data, 'harga');
            $errors = $this->validation->getErrors();

            if (!$errors) {

                // Simpan data
                $model = new Harga_M();

               $prize = new Harga_E();

                // Fill untuk assign value data kecuali gambar
               $prize->fill($data);
               $prize->harga = $this->request->getPost('harga');
               $prize->created_at = date("Y-m-d H:i:s");

                $model->save($prize);

                $id_harga = $model->insertID();

                $segments = ['Admin', 'Harga_Admin', 'view', $id_harga];

                // Akan redirect ke /Admin/Rak_A/view/$id_barang
                return redirect()->to(site_url($segments));
            }

            $this->session->setFlashdata('errors', $errors);
        }
        return view('Admin_View/Harga_View/insert_harga', $data_harga);
    }

    public function update()
    {
        $id_harga = $this->request->uri->getSegment(4);

        $model = new Harga_M();

        $harga = $model->join('tbl_barang', 'tbl_barang.id_barang = tbl_harga.id_barang')->where('tbl_harga.id_harga', $id_harga)->first();
        
        // Dapatkan Semua data
        $model_barang = new Barang_M();
        $barang = $model_barang->findAll();
        $list_barang = [];

        // Buat looping
        foreach ($barang as $goods) {
            $list_barang[$goods->id_barang] = $goods->nama_barang;
        }

        $data = [
            'prize' =>$harga,
            "title" => 'Harga',
            'daftar_barang' => $list_barang,
        ];

        if ($this->request->getPost()) {
            $data_harga = $this->request->getPost();
            $this->validation->run($data_harga, 'harga_update');
            $errors = $this->validation->getErrors();

            if (!$errors) {
               $prize = new Harga_E();
               $prize->id_harga = $id_harga;
               $prize->fill($data_harga);
               $prize->harga = $this->request->getPost('harga');

               $prize->updated_at = date("Y-m-d H:i:s");

                $model->save($prize);

                $segments = ['Admin', 'Harga_Admin', 'view', $id_harga];

                return redirect()->to(site_url($segments));
            }
        }

        return view('Admin_View/Harga_View/update_harga', $data);
    }

    public function delete()
    {
        $id_harga = $this->request->uri->getSegment(4);

        $model = new Harga_M();

        $delete = $model->delete($id_harga);

        return redirect()->to(site_url('Admin/Harga_Admindmin/read'));
    }
}
