<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//Home:
$routes->get('/', 'HomeController::index');

//Examples:
$routes->get('/example', 'ExampleController::index');
$routes->get('/example/([0-9]{2})', 'ExampleController::show/$1');
$routes->get('/example/(:num)/(:alpha)', 'ExampleController::show2/$2/$1');
//$routes->get('/example/(:num)/(:alpha)', 'ExampleController::show2/$1/$2'); Esta da lo mismo pero al reves
$routes->view('/exampleview', 'example');