<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

// Páginas Principales
$routes->get('/', 'Home::index');
$routes->get('atractivos', 'Home::atractivos');
$routes->get('experiencias', 'Home::experiencias');
$routes->get('sobre-misiones', 'Home::sobreMisiones');
$routes->get('info-practica', 'Home::infoPractica');


// Perfil
$routes->get('perfil', 'Perfil::index', ['filter' => 'auth']);

// Autenticación
$routes->get('login', 'Login::index');
$routes->post('login/ingresar', 'Login::ingresar'); 
$routes->get('logout', 'Login::salir', ['filter' => 'auth']);            

// Registro
$routes->get('registro', 'Registro::index');
$routes->post('registro/guardar', 'Registro::guardar');

// Vista Actividades
$routes->get('actividades', 'ActividadController::index');

$routes->get('actividades/crear', 'ActividadController::crear', ['filter' => 'adminAuth']);
$routes->post('actividades/guardar', 'ActividadController::guardar', ['filter' => 'adminAuth']);
$routes->get('actividades/editar/(:num)', 'ActividadController::editar/$1', ['filter' => 'adminAuth']);
$routes->post('actividades/actualizar/(:num)', 'ActividadController::actualizar/$1', ['filter' => 'adminAuth']);
$routes->post('actividades/eliminar/(:num)', 'ActividadController::eliminar/$1', ['filter' => 'adminAuth']);

// Reservas
$routes->get('reservas', 'ReservaController::index', ['filter' => 'auth']);
$routes->post('reservas/guardar', 'ReservaController::guardar', ['filter' => 'auth']);
$routes->post('reservas/eliminar/(:num)', 'ReservaController::eliminar/$1', ['filter' => 'auth']);