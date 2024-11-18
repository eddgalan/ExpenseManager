<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
/** Authentication */
$routes->get('/', function() { return redirect()->to('/dashboard'); });
$routes->get('login', 'Login::index', ['as' => 'loginForm']);
$routes->post('login', 'Login::authenticate', ['as' => 'loginAuthenticate']);
$routes->get('logout', 'Login::logout', ['as' => 'logout']);
$routes->get('register', 'Login::registerCreate', ['as' => 'registerCreate']);
$routes->post('register', 'Login::registerStore', ['as' => 'registerPost']);
/** Dashboard */
$routes->get('dashboard', 'Dashboard::index', ['as' => 'dashboard', 'filter' => 'auth']);
/** Expenses */
$routes->group('expenses', ['namespace' => 'App\Controllers', 'filter' => 'auth'], function ($routes) {
    $routes->get('/', 'Expenses::index', ['as' => 'expenses.index']);
});
