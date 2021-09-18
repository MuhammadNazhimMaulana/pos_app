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

    //--------------------------------------------------------------------
}
