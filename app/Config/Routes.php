<?php

use App\Controllers\Auth;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

#authentication routes
$routes->get('/auth/login', [Auth::class, 'login']);
$routes->get('/auth/signup', [Auth::class, 'signup']);
