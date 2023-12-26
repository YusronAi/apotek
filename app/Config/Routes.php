<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::dashboard');
$routes->get('/index', 'Home::index');
$routes->post('/save-detail', 'Home::saveDetail');
$routes->get('/input-transaksi/(:any)', 'Home::inputTransaksi/$1');
$routes->post('/save-transaksi', 'Home::saveTransaksi');
$routes->get('/dashboardid', 'Home::dashboardId');

$routes->get('/data-penjualan', 'PenjualanController::data');
$routes->get('/hapus-penjualan/(:any)', 'PenjualanController::delete/$1');
$routes->get('/cetak/(:any)', 'PenjualanController::cetak/$1');

$routes->get('/users', 'User::users');

$routes->get('/data-pelanggan', 'pelangganController::pelanggan');
$routes->get('/input-pelanggan', 'pelangganController::input');
$routes->post('/save-pelanggan', 'pelangganController::save');
$routes->get('/hapus-pelanggan/(:any)', 'pelangganController::delete/$1');
$routes->get('/edit-pelanggan/(:any)', 'pelangganController::edit/$1');
$routes->post('/update-pelanggan/(:any)', 'pelangganController::update/$1');

$routes->get('/data-obat', 'obatController::obat');
$routes->get('/data-obat/hapus/(:num)', 'obatController::delete/$1');
$routes->get('/input-obat', 'obatController::input');
$routes->post('/save-obat', 'obatController::save');
$routes->get('/data-obat/edit/(:any)', 'obatController::edit/$1');
$routes->post('/data-obat/update/(:any)', 'obatController::update/$1');

$routes->get('/login', 'user::login');
$routes->get('/logout', 'user::logout');
$routes->post('/save-user', 'user::save');
$routes->get('/register', 'page::register');
$routes->post('/auth', 'user::auth');
$routes->get('/forgot-password', 'page::register');
$routes->get('/404', 'Home::forfor');
$routes->get('/blank', 'Home::blank');

$routes->get('/charts', 'Home::charts');
$routes->get('/buttons', 'interfa::buttons');
$routes->get('/cards', 'interfa::cards');
$routes->get('/utilities-color', 'interfa::colors');
$routes->get('/utilities-border', 'interfa::borders');
$routes->get('/utilities-animation', 'interfa::animations');
$routes->get('/utilities-other', 'interfa::other');