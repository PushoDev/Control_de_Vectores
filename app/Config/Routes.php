<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

#Pantalla del Login para auth usuarios
$routes->get('/', 'Home::index');
//Metodos del login
$routes->post('home/login', 'Home::login');

#Pantalla Principal del C.R.U.D para trabajo de los usuarios
$routes->get('/inventario/home.php', 'Home::inventario');