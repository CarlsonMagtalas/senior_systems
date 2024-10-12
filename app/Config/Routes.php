<?php

use App\Controllers\Auth;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

#authentication routes
$routes->get('/auth/login', [Auth::class, 'login']);
$routes->post('/auth/login', [Auth::class, 'verify']);
$routes->get('/auth/signup', [Auth::class, 'signup']);
