<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/pengunjung', 'Pengunjung::index');
$routes->get('/add_data_pengunjung', 'Pengunjung::add_data_pengunjung');
$routes->post('/proses_add_pengunjung', 'Pengunjung::proses_add_pengunjung');
$routes->get('/edit_data_pengunjung/(:any)', 'Pengunjung::edit_data_pengunjung/$1');
$routes->post('/proses_edit_pengunjung', 'Pengunjung::proses_edit_pengunjung');
$routes->get('/delete_data_pengunjung/(:any)', 'Pengunjung::delete_data_pengunjung/$1');
