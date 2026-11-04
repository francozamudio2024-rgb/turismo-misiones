<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

$routes->get('/', 'Home::index');
$routes->get('atractivos', 'Home::atractivos');
$routes->get('experiencias', 'Home::experiencias');
$routes->get('sobre-misiones', 'Home::sobreMisiones');
$routes->get('info-practica', 'Home::infoPractica');

$routes->get('perfil', 'Perfil::index', ['filter' => 'auth']);

$routes->get('login', 'Login::index');
$routes->post('login/ingresar', 'Login::ingresar');
$routes->get('logout', 'Login::salir', ['filter' => 'auth']);

$routes->get('registro', 'Registro::index');
$routes->post('registro/guardar', 'Registro::guardar');

$routes->get('actividades', 'ActividadController::index');
$routes->get('actividades/crear', 'ActividadController::crear', ['filter' => 'adminAuth']);
$routes->post('actividades/guardar', 'ActividadController::guardar', ['filter' => 'adminAuth']);
$routes->get('actividades/editar/(:num)', 'ActividadController::editar/$1', ['filter' => 'adminAuth']);
$routes->post('actividades/actualizar/(:num)', 'ActividadController::actualizar/$1', ['filter' => 'adminAuth']);
$routes->post('actividades/eliminar/(:num)', 'ActividadController::eliminar/$1', ['filter' => 'adminAuth']);

$routes->get('reservas', 'ReservaController::index', ['filter' => 'auth']);
$routes->get('reservas/crear/(:num)', 'ReservaController::crear/$1', ['filter' => 'auth']);
$routes->post('reservas/guardar', 'ReservaController::guardar', ['filter' => 'auth']);
$routes->post('reservas/eliminar/(:num)', 'ReservaController::eliminar/$1', ['filter' => 'auth']);

$routes->get('alojamientos', 'AlojamientoController::index', ['filter' => 'auth']);
$routes->get('alojamientos/crear', 'AlojamientoController::crear', ['filter' => 'adminAuth']);
$routes->post('alojamientos/guardar', 'AlojamientoController::guardar', ['filter' => 'adminAuth']);
$routes->get('alojamientos/editar/(:num)', 'AlojamientoController::editar/$1', ['filter' => 'adminAuth']);
$routes->post('alojamientos/actualizar/(:num)', 'AlojamientoController::actualizar/$1', ['filter' => 'adminAuth']);
$routes->post('alojamientos/eliminar/(:num)', 'AlojamientoController::eliminar/$1', ['filter' => 'adminAuth']);
$routes->get('alojamientos/detalle/(:num)', 'AlojamientoController::detalle/$1');
$routes->get('alojamientos/reserva/(:num)', 'AlojamientoController::reserva/$1');

$routes->get('usuarios', 'UsuarioController::index', ['filter' => 'adminAuth']);