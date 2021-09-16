<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

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
        return view('Admin_View/Kategori_View/read_kategori');
    }
}
