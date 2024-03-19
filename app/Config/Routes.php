<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('hello', 'Home::hello');
$routes->get('login', 'Login::index');
$routes->get('register', 'Login::registerForm');
$routes->post('register/create', 'Login::registerCreate');
