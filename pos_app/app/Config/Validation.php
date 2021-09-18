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

    //--------------------------------------------------------------------
}
