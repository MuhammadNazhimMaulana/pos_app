<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

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

    public function login()
    {
        return view('Authorisasi_View/login_view');
    }
}
