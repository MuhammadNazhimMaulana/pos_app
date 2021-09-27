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

    public function home()
    {
        $data = [
            'title' => 'dashboard',
        ];

        return view('Admin_View/User_View/dashboard_view', $data);
    }

    public function profile()
    {
        $data = [
            'title' => 'profile',
        ];

        return view('Admin_View/User_View/profile_view', $data);
    }
}
