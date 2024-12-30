<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// publoc
 $routes->get('/', 'Home::index');
$routers->get('/search', 'Home::search');
$routers->get('/cart', 'Home::cart');
$routers->get('/checkout', 'Home::checkout');
$routers->post('/submit', 'Home::submit');

// Admin
$routers->group('admin', ['filter' => []] function($routers){
    $routers->get('dashboard', 'AdminController::dashboard');
    $routers->get('daftar-buku', 'AdminController::daftarBuku');
    $routers->get('transaksi', 'AdminController::transaksi');
    $routers->get('pelanggan', 'AdminController::pelanggan');
});