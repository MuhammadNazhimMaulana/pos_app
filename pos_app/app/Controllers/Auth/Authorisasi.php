<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\User_M;
use App\Entities\User_E;

class Authorisasi extends BaseController
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

    public function register()
    {
        if ($this->request->getPost()) {

            // Validasi data yang di post
            $data = $this->request->getPost();
            $validate = $this->validation->run($data, 'register');

            $errors = $this->validation->getErrors();

            //Jika tidak ada error
            if (!$errors) {

                $model = new User_M();
                $user = new User_E();

                // Dapatkan data yang telah di input
                $user->fill($data);
                $user->tingkat = 1;
                $user->created_at = date("Y-m-d H:i:s");
                $user->password = $this->request->getPost('password');

                $model->save($user);
                return view('Authorisasi_View/login_view');
            }

            $this->session->setFlashdata('errors', $errors);
        }

        return view('Authorisasi_View/register_view');
    }

    public function login()
    {
        return view('Authorisasi_View/login_view');
    }
}
