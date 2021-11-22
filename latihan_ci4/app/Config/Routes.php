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
$routes->get('/', 'Home::index');

//jurusan
// $routes->get('/jurusan', 'JurusanController::index');
// $routes->get('/jurusan/create', 'JurusanController::create');
// $routes->post('/jurusan/store', 'JurusanController::store');
// $routes->get('/jurusan/edit/(:num)', 'JurusanController::edit/$1');
// $routes->post('/jurusan/update/(:num)', 'JurusanController::updateJurusan/$1');
// $routes->get('/jurusan/delete/(:num)', 'JurusanController::deleteJurusan/$1');

//paket
$routes->get('/paket', 'PaketController::index');
$routes->get('/paket/create', 'PaketController::create');
$routes->post('/paket/store', 'PaketController::store');
$routes->get('/paket/edit/(:num)', 'PaketController::edit/$1');
$routes->post('/paket/update/(:num)', 'PaketController::updatePaket/$1');
$routes->get('/paket/delete/(:num)', 'PaketController::deletePaket/$1');

// $routes->get('/', 'PaketController::index');
// $routes->get('paket', 'PaketController::index');
// $routes->add('paket', 'PaketController::create');
// $routes->group('', ['filter' => 'login'], function($routes){
//     $routes->get('dashboard', 'Home::dashboard');
//     $routes->get('paket', 'PaketController::index');
//     $routes->add('paket', 'PaketController::create');
// });

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
