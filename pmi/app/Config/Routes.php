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
$routes->get('/', 'UserController::index');

//user
$routes->get('/user', 'UserController::index');
$routes->get('/user/peserta', 'UserController::peserta');
$routes->get('/register', 'UserController::register');
$routes->post('/register', 'UserController::register');
$routes->get('/login', 'UserController::login');
$routes->post('/login', 'UserController::login');
$routes->get('/logout', 'UserController::logout');

$routes->get('/user/edit/(:num)', 'UserController::edit/$1');
$routes->post('/user/update/(:num)', 'UserController::updateUser/$1');
$routes->get('/user/delete/(:num)', 'UserController::deleteUser/$1');

//unit
$routes->get('/unit', 'UnitController::index');
$routes->get('/unit/create', 'UnitController::create');
$routes->post('/unit/store', 'UnitController::store');
$routes->get('/unit/edit/(:num)', 'UnitController::edit/$1');
$routes->post('/unit/update/(:num)', 'UnitController::updateUnit/$1');
$routes->get('/unit/delete/(:num)', 'UnitController::deleteUnit/$1');

//penugasan
$routes->get('/penugasan', 'PenugasanController::index');
$routes->get('/penugasan/edit/(:num)', 'PenugasanController::edit/$1');
$routes->post('/penugasan/update/(:num)', 'PenugasanController::updatePenugasan/$1');
$routes->get('/penugasan/delete/(:num)', 'PenugasanController::deletePenugasan/$1');

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
