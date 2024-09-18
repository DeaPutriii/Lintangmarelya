<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */ 


$routes->get('/Awal', 'Buku::index');
$routes->get('/buku', 'Buku::tampil');
//artinya kode diatas adalah untuk menyambungkan controller dan method
//buka controller buku::method index
$routes->get('/buku/create', 'Buku::create');
$routes->post('/buku/store', 'Buku::store');
$routes->post('/buku/edit', 'Buku::edit');
$routes->post('/buku/update/(:segment)', 'Buku::update/$1');
$routes->post('buku/delete', 'Buku::delete');

$routes->get('/user', 'User::index');
$routes->get('/users/create', 'User::create');
$routes->post('/users/store', 'User::store');
$routes->get('/user/edit/(:num)', 'User::edit/$1');
$routes->post('/user/update', 'User::update');
$routes->post('/user/delete/(:num)', 'User::delete/$1');   

$routes->get('/peminjaman', 'Peminjaman::index');
$routes->get('/peminjaman/create', 'Peminjaman::create');
$routes->post('/peminjaman/store', 'Peminjaman::store');
$routes->get('/peminjaman/edit/(:num)', 'Peminjaman::edit/$1');
$routes->post('/peminjaman/update/(:num)', 'Peminjaman::update/$1');
$routes->get('/peminjaman/delete/(:num)', 'Peminjaman::delete/$1');

$routes->get('/pengembalian', 'PengembalianController::index');
$routes->get('/pengembalian/create', 'PengembalianController::create');
$routes->post('/pengembalian/store', 'PengembalianController::store');
$routes->post('/pengembalian/edit/(:num)', 'PengembalianController::edit/$1');
$routes->post('/pengembalian/update/(:segment)', 'PengembalianController::update/$1');
$routes->post('/pengembalian/delete/(:segment)', 'PengembalianController::delete/$1');
 