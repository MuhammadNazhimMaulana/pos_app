<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Kategori_M;
use App\Entities\Kategori_E;

class Kategori_Admin extends BaseController
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
        $model = new Kategori_M();

        $data = [
            'data_kategori' => $model->findAll()
        ];

        return view('Admin_View/Kategori_View/read_kategori', $data);
    }

    public function view()
    {
        // Dapatkan Id dari segmen
        $id_kategori = $this->request->uri->getSegment(4);

        $model = new Kategori_M();

       $kategori = $model->find($id_kategori);

        // Data yang akan dikirim ke view specific
        $data = [
            "kategori" =>$kategori,
            "title" => 'Kategori'
        ];

        return view('Admin_View/Kategori_View/view_specific_kategori', $data);
    }

    public function create()
    {
        $data_kategori = [
            "title" => 'Kategori'
        ];

        if ($this->request->getPost()) {
            // Jikalau ada data di post
            $data = $this->request->getPost();
            $this->validation->run($data, 'kategori');
            $errors = $this->validation->getErrors();

            if (!$errors) {

                // Simpan data
                $model = new Kategori_M();

               $kategori = new Kategori_E();

                // Fill untuk assign value data kecuali gambar
               $kategori->fill($data);
               $kategori->foto_kategori = $this->request->getFile('foto_kategori');
               $kategori->created_at = date("Y-m-d H:i:s");

                $model->save($kategori);

                $id_kategori = $model->insertID();

                $segments = ['Admin', 'Kategori_Admin', 'view', $id_kategori];

                // Akan redirect ke /Admin/Rak_A/view/$id_barang
                return redirect()->to(site_url($segments));
            }

            $this->session->setFlashdata('errors', $errors);
        }
        return view('Admin_View/Kategori_View/insert_kategori', $data_kategori);
    }

    public function update()
    {
        $id_kategori = $this->request->uri->getSegment(4);

        $model = new Kategori_M();

       $kategori = $model->find($id_kategori);

        $data = [
            'kategori' =>$kategori,
            "title" => 'Kategori'
        ];

        if ($this->request->getPost()) {
            $data_kategori = $this->request->getPost();
            $this->validation->run($data_kategori, 'kategori_update');
            $errors = $this->validation->getErrors();

            if (!$errors) {
               $kategori = new Kategori_E();
               $kategori->id_kategori = $id_kategori;
               $kategori->fill($data_kategori);

               $kategori->updated_at = date("Y-m-d H:i:s");

                $model->save($kategori);

                $segments = ['Admin', 'Kategori_Admin', 'view', $id_kategori];

                return redirect()->to(site_url($segments));
            }
        }

        return view('Admin_View/Kategori_View/update_kategori', $data);
    }

    public function delete()
    {
        $id_kategori = $this->request->uri->getSegment(4);

        $model = new Kategori_M();

        $delete = $model->delete($id_kategori);

        return redirect()->to(site_url('Admin/Kategori_Admindmin/read'));
    }
}
