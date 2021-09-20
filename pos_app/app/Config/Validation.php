<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    //--------------------------------------------------------------------
    // Rules

	// Bagian Register

	public $register = [
		'nama_lengkapa' => [
			'rules' => 'required',
		],
		'username' => [
			'rules' => 'required|min_length[5]',
		],
		'alamat' => [
			'rules' => 'required',
		],
		'password' => [
			'rules' => 'required',
		],
		'password_confirm' => [
			'rules' => 'required|matches[password]',
		]
	];

	public $register_errors = [
		'nama_lengkapa' => [
			'required' => '{field} Harus diisi',
		],
		'username' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimal 5 karakter,'
		],
		'alamat' => [
			'required' => '{field} Harus diisi',
		],
		'password' => [
			'required' => '{field} Harus diisi',
		],
		'password_confirm' => [
			'required' => '{field} Harus diisi',
			'matches' => '{field} Tidak sama dengan Password',
		]
	];

	// Bagian Login
	public $login = [
		'username' => [
			'rules' => 'required|min_length[3]',
		],
		'password' => [
			'rules' => 'required',
		],
	];

	public $login_errors = [
		'username' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimal 3 karakter,'
		],
		'password' => [
			'required' => '{field} Harus diisi',
		],
	];

	// Bagian Kategori
	public $kategori = [
		'nama_kategori' => [
			'rules' => 'required|is_unique[tbl_kategori.nama_kategori]',
		],
		'foto_kategori' => [
			'rules' => 'uploaded[foto_kategori]',
		],
		'keterangan' => [
			'rules' => 'required',
		],
	];

	public $kategori_errors = [
		'nama_kategori' => [
			'required' => '{field} Harus diisi',
			'is_unique' => 'Kategori yang dimasukksan Sudah Ada'
		],
		'foto_kategori' => [
			'uploaded' => '{field} Harus diupload',
		],
		'keterangan' => [
			'required' => '{field} Harus diisi',
		],
	];

	public $kategori_update = [
		'nama_kategori' => [
			'rules' => 'required',
		],
		'keterangan' => [
			'rules' => 'required',
		],
	];

	public $kategori_update_errors = [
		'nama_kategori' => [
			'required' => '{field} Harus diisi',
		],
		'keterangan' => [
			'required' => '{field} Harus diisi',
		],
	];

	// Bagian Barang
	public $barang = [
		'id_kategori' => [
			'rules' => 'required',
		],
		'nama_barang' => [
			'rules' => 'required',
		],
		'foto_barang' => [
			'rules' => 'uploaded[foto_barang]',
		],
		'status' => [
			'rules' => 'required',
		],
	];

	public $barang_errors = [
		'id_kategori' => [
			'required' => '{field} Harus diisi',
		],
		'nama_barang' => [
			'required' => '{field} Harus diisi',
		],
		'foto_barang' => [
			'uploaded' => '{field} Harus diupload',
		],
		'status' => [
			'required' => '{field} Harus diisi',
		],
	];

	public $barang_update = [
		'id_kategori' => [
			'rules' => 'required',
		],
		'nama_barang' => [
			'rules' => 'required',
		],
		'status' => [
			'rules' => 'required',
		],
	];

	public $barang_update_errors = [
		'id_kategori' => [
			'required' => '{field} Harus diisi',
		],
		'nama_barang' => [
			'required' => '{field} Harus diisi',
		],
		'status' => [
			'required' => '{field} Harus diisi',
		],
	];

	// Bagian Harga
	public $harga = [
		'id_barang' => [
			'rules' => 'required',
		],
		'range_1' => [
			'rules' => 'required',
		],
		'range_2' => [
			'rules' => 'required',
		],
	];

	public $harga_errors = [
		'id_barang' => [
			'required' => '{field} Harus diisi',
		],
		'range_1' => [
			'required' => '{field} Harus diisi',
		],
		'range_2' => [
			'required' => '{field} Harus diisi',
		],
	];

	public $harga_update = [
		'id_barang' => [
			'rules' => 'required',
		],
		'range_1' => [
			'rules' => 'required',
		],
		'range_2' => [
			'rules' => 'required',
		],
	];

	public $harga_update_errors = [
		'id_barang' => [
			'required' => '{field} Harus diisi',
		],
		'range_1' => [
			'required' => '{field} Harus diisi',
		],
		'range_2' => [
			'required' => '{field} Harus diisi',
		],
	];
	
	// Bagian Stok
	public $stok = [
		'id_barang' => [
			'rules' => 'required',
		],
		'stok_awal' => [
			'rules' => 'required',
		],
		'stok' => [
			'rules' => 'required',
		],
	];

	public $stok_errors = [
		'id_barang' => [
			'required' => '{field} Harus diisi',
		],
		'stok_awal' => [
			'required' => '{field} Harus diisi',
		],
		'stok' => [
			'required' => '{field} Harus diisi',
		],
	];

	public $stok_update = [
		'id_barang' => [
			'rules' => 'required',
		],
		'stok_awal' => [
			'rules' => 'required',
		],
		'stok' => [
			'rules' => 'required',
		],
	];

	public $stok_update_errors = [
		'id_barang' => [
			'required' => '{field} Harus diisi',
		],
		'stok_awal' => [
			'required' => '{field} Harus diisi',
		],
		'stok' => [
			'required' => '{field} Harus diisi',
		],
	];
	
    //--------------------------------------------------------------------
}
