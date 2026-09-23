<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/user', 'User::index');
$routes->get('/user/create', 'User::create');
$routes->get('/user/edit/(:num)', 'User::edit/$1');

$routes->post('/user/store', 'User::store'); // Guardar nuevo usuario
$routes->post('/user/update/(:num)', 'User::update/$1'); // Guardar cambios
$routes->get('/user/delete/(:num)', 'User::delete/$1'); // Eliminar usuario

$routes->get('/singer', 'Singer::index');
$routes->get('/singer/create', 'Singer::create');
$routes->get('/singer/edit/(:num)', 'Singer::edit/$1');

$routes->post('/singer/store', 'Singer::store');
$routes->post('/singer/update/(:num)', 'Singer::update/$1');
$routes->get('/singer/delete/(:num)', 'Singer::delete/$1');