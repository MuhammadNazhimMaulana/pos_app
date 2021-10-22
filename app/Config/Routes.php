<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// Routes Admin
$routes->group('admin', ['filter' => 'auth'], function ($routes) {

	// Umum
	$routes->add('/', 'Admin\Dashboard_Admin::home');
	$routes->add('profile', 'Admin\Dashboard_Admin::profile');
	$routes->add('profile/update/(:any)', 'Admin\Dashboard_Admin::update/$1');

	// Route Brang
	$routes->add('goods', 'Admin\Barang_Admin::read');
	$routes->add('goods/create', 'Admin\Barang_Admin::create');
	$routes->add('goods/view/(:any)', 'Admin\Barang_Admin::view/$1');
	$routes->add('goods/update/(:any)', 'Admin\Barang_Admin::update/$1');
	$routes->add('goods/delete/(:any)', 'Admin\Barang_Admin::delete/$1');
	
	// Route Kategori
	$routes->add('categories', 'Admin\Kategori_Admin::read');
	$routes->add('categories/create', 'Admin\Kategori_Admin::create');
	$routes->add('categories/view/(:any)', 'Admin\Kategori_Admin::view/$1');
	$routes->add('categories/update/(:any)', 'Admin\Kategori_Admin::update/$1');
	$routes->add('categories/delete/(:any)', 'Admin\Kategori_Admin::delete/$1');
	
	// Route Harga
	$routes->add('prizes', 'Admin\Harga_Admin::read');
	$routes->add('prizes/create', 'Admin\Harga_Admin::create');
	$routes->add('prizes/view/(:any)', 'Admin\Harga_Admin::view/$1');
	$routes->add('prizes/update/(:any)', 'Admin\Harga_Admin::update/$1');
	$routes->add('prizes/delete/(:any)', 'Admin\Harga_Admin::delete/$1');
	
	// Route Stok
	$routes->add('stocks', 'Admin\Stok_Admin::read');
	$routes->add('stocks/create', 'Admin\Stok_Admin::create');
	$routes->add('stocks/view/(:any)', 'Admin\Stok_Admin::view/$1');
	$routes->add('stocks/update/(:any)', 'Admin\Stok_Admin::update/$1');
	$routes->add('stocks/delete/(:any)', 'Admin\Stok_Admin::delete/$1');
	
	// Route Transaksi
	$routes->add('transactions', 'Admin\Transaksi_Admin::read');
	$routes->add('transactions/home', 'Admin\Transaksi_Admin::home');
	$routes->add('transactions/check_out/(:any)', 'Admin\Transaksi_Admin::check_out/$1');
	$routes->add('transactions/insert', 'Admin\Transaksi_Admin::insert');
	$routes->add('transactions/view/(:any)', 'Admin\Transaksi_Admin::view/$1');
	$routes->add('transactions/pdf/(:any)', 'Admin\Transaksi_Admin::pdf/$1');
	$routes->add('transactions/payment/(:any)', 'Admin\Transaksi_Admin::pembayaran/$1');
	
	// Route Item Transaksi
	$routes->add('items/input/(:any)', 'Admin\Item_Admin::input/$1');
	$routes->add('items/action', 'Admin\Item_Admin::action');
	$routes->add('items/update/(:any)', 'Admin\Item_Admin::update/$1');
	$routes->add('items/delete/(:any)', 'Admin\Item_Admin::delete/$1');
    
});

// Login
$routes->get('/login', 'Auth\Authorisasi::login');

// Register
$routes->get('/register', 'Auth\Authorisasi::register');

// Logout
$routes->get('/logout', 'Auth\Authorisasi::logout');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
