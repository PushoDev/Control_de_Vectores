"<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

#Pantalla del Login para auth usuarios
$routes->get('/', 'Home::index');
//Metodos del login
$routes->post('home/login', 'Home::login');

// Salir del proyecto
$routes->get('/logout', 'Home::logout');

#Pantalla Principal del C.R.U.D para trabajo de los usuarios
$routes->get('/inventario/resumen_general', 'Home::resumen_general');

#Pantalla de Sindrome Febriles
// Rutas para sindromes febriles

