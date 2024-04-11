<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
/** Authentication */
$routes->get('/', 'Home::index');
$routes->get('hello', 'Home::hello');
$routes->get('login', 'Login::index');
$routes->post('login', 'Login::authenticate');
$routes->get('logout', 'Login::logout');
$routes->get('register', 'Login::registerForm');
$routes->post('register/create', 'Login::registerCreate');
/** Dashboard */
$routes->get('dashboard', 'Dashboard::index');
