<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\User_M;
use App\Entities\User_E;

class Dashboard_Admin extends BaseController
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
        $data = [
            'title' => 'dashboard',
        ];

        return view('Admin_View/User_View/dashboard_view', $data);
    }

    public function profile()
    {
        $model = new User_M();

        $data = [
            'title' => 'profile',
            'profil' => $model->where('tbl_users.username', $this->session->get('username'))->first(),
        ];

        return view('Admin_View/User_View/profile_view', $data);
    }

    public function update()
    {
        $id_pengguna = $this->request->uri->getSegment(4);

        $model = new User_M();

        $profil = $model->where('tbl_users.id_pengguna', $id_pengguna)->first();

        $data = [
            'title' => 'profile',
            'profil' => $profil,
        ];

        if ($this->request->getPost()) {
            $data_profile = $this->request->getPost();
            $this->validation->run($data_profile, 'profile_update');
            $errors = $this->validation->getErrors();

            if (!$errors) {
               $pengguna = new User_E();
               $pengguna->id_pengguna = $id_pengguna;
               $pengguna->fill($data_profile);

               // Jikalau Ada gambar yang diganti
               if ($this->request->getFile('foto_user')->isValid()) {
                $post->foto_user = $this->request->getFile('foto_user');
            }

               $pengguna->updated_at = date("Y-m-d H:i:s");

                $model->save($pengguna);

                $segments = ['Admin', 'Dashboard_Admin', 'profile'];

                return redirect()->to(site_url($segments));
            }
            $this->session->setFlashdata('errors', $errors);
        }
        return view('Admin_View/User_View/update_profile', $data);
    }
}
