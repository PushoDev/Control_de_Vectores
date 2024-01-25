<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Rutas del login inicio original de la App
$routes->get('/', 'Home::index');
// Metodos del login
$routes->post('home/login', 'Home::login');


// Administracion General
$routes->get('/inventario/resumen_general', 'Home::administracion');


// Salir del proyecto
$routes->get('/logout', 'Home::logout');