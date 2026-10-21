<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

// Páginas Principales
$routes->get('/', 'Home::index');
$routes->get('atractivos', 'Home::atractivos');
$routes->get('experiencias', 'Home::experiencias');
$routes->get('sobre-misiones', 'Home::sobreMisiones');
$routes->get('info-practica', 'Home::infoPractica');

// Autenticación (Login y Logout)
$routes->get('login', 'Login::index');
$routes->post('login/ingresar', 'Login::ingresar'); 
$routes->get('logout', 'Login::salir');            

// Registro
$routes->get('registro', 'Registro::index');
$routes->post('registro/guardar', 'Registro::guardar');

// Vista Actividades
$routes->get('actividades', 'ActividadController::index');
$routes->get('actividades/crear', 'ActividadController::crear');
$routes->post('actividades/guardar', 'ActividadController::guardar');
$routes->get('actividades/editar/(:num)', 'ActividadController::editar/$1');
$routes->post('actividades/actualizar/(:num)', 'ActividadController::actualizar/$1');
$routes->post('actividades/eliminar/(:num)', 'ActividadController::eliminar/$1');

// Reservas
$routes->get('reservas', 'ReservaController::index');
$routes->post('reservas/guardar', 'ReservaController::guardar');
$routes->post('reservas/eliminar/(:num)', 'ReservaController::eliminar/$1');