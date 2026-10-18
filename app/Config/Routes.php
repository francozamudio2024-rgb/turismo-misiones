<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

$routes->get('/', 'Home::index');

$routes->get('actividades', 'ActividadController::index');


$routes->get('actividades/crear', 'ActividadController::crear');
$routes->post('actividades/guardar', 'ActividadController::guardar');

$routes->get('actividades/editar/(:num)', 'ActividadController::editar/$1');
$routes->post('actividades/actualizar/(:num)', 'ActividadController::actualizar/$1');


$routes->post('actividades/eliminar/(:num)', 'ActividadController::eliminar/$1');


$routes->get('reservas', 'ReservaController::index');
$routes->post('reservas/guardar', 'ReservaController::guardar');
$routes->post('reservas/eliminar/(:num)', 'ReservaController::eliminar/$1');
