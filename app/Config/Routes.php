<?php

namespace Config;

use CodeIgniter\Router\Router;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
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

// Will display a custom view
// $routes->set404Override(function()
// {
//     echo view('errors/404-Ngk-Enek');
// });

/*
 * --------------------------------------------------------------------
 * Route Definitions
    // $routes->get('/URLSEGMEN/(:any)','Controllernya::Functionnya/$dataurlsegmennya');
    // :any => apapun
    // :num => angka
    // :alpha => huruf
    // :alphanum => huruf angka
    // :segmen=>apapun kecuali /

 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// ========= DEFAULT CI4 =========//
// $routes->get('/', 'Home::index');
// ========= END DEFAULT CI4 =========//
$routes->get('/', 'Home::index');
$routes->get('/coba/(:any)/(:num)','Coba::about/$1/$2');

// ==== BUG KALAU :any || HARUS BUAT ROUTE CONTROLLER MANUAL ======//
$routes->get('/coba/index','Coba::index');
$routes->get('/coba/about','Coba::about');

// ==== ROUTE UNTUK CONTROLLER DLAM FOLDER =====//
$routes->get('/users','Admin\Users::index');

// ========= DETAIL =============
$routes->get('/Detail','Detail\Isi::index');
$routes->get('/Detail/(:any)','Detail\Isi::isinya/$1');



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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
