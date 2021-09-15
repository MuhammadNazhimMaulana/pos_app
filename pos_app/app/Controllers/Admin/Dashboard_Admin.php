<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

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

    public function view()
    {
        return view('Admin_View/dashboard_view');
    }
}
