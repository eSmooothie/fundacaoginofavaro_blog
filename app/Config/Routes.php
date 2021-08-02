<?php

namespace Config;

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

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

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

// Routes:
$routes->add('explore/', 'Map::index');
$routes->add('explore/site/(:num)', 'Map::site/$1');

//admin
$routes->add('/admin/login/', 'Home::adminLogin');
$routes->add('/admin/','Home::admin');
$routes->add('/admin/view/sites','Home::viewSites');
$routes->add('/admin/site/edit/(:num)','Home::editSite');
$routes->add('/admin/site/remove/(:num)','Home::removeSite');
$routes->post('/admin/login/submit/','Home::validateCredentials');

$routes->post('/add/site/','Api::addNewSite'); // add new site
$routes->post('/add/image/site','Api::addImageSite'); // add new images in a site
$routes->get('/get/site/','Api::getSite'); // get all site
$routes->post('/edit/site/','Api::editSite');
$routes->post('/delete/site/','Api::deleteSite');

// responses
$routes->add('map/load/site/(:num)', 'Map::loadMapSite/$1');
$routes->get('/get/image/site/', 'Map::getSiteImage');

//blog post
$routes->add('blog/post/(:num)','Blog::post/$1');
