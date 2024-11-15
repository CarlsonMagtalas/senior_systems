<?php

use App\Controllers\Auth;
use App\Controllers\Dashboard;
use App\Controllers\Emails;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

#authentication routes
$routes->get('/auth/login', [Auth::class, 'login']);
$routes->post('/auth/login', [Auth::class, 'verify_login']);
$routes->get('/auth/signup', [Auth::class, 'signup']);
$routes->post('/auth/signup', [Auth::class, 'verify_signup']);

#dashboard routes
$routes->get('/dashboard', [Dashboard::class, 'index']);

#testing only
$routes->get('/email', [Emails::class, 'send']);