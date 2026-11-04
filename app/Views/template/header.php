<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turismo Misiones</title>

    <!-- css de bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- iconos de bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- styles.css-->
    <link rel="stylesheet" href="<?= base_url('css/estilos.css') ?>">
</head>
<body class="bg-light text-dark d-flex flex-column min-vh-100">

    <!-- navbar-->
    <header class="bg-verde-misiones text-white py-3 shadow-sm">
        <div class="container-fluid px-lg-4 px-xl-5">
            <div class="row align-items-center text-center text-xl-start">
            
                <!-- columna izquierda -->
                <div class="col-xl-3 mb-3 mb-xl-0">
                    <a href="<?= base_url('/') ?>" class="text-white text-decoration-none">
                        <h1 class="h4 mb-0 fw-bold tracking-wide d-inline-block">Turismo Misiones</h1>
                    </a>
                </div>

                <div class="col-xl-7 mb-3 mb-xl-0 d-flex justify-content-center">
                    <nav class="d-flex gap-3 gap-xxl-4 flex-wrap justify-content-center align-items-center">

                        <?php if (session()->get('rol') === 'admin'): ?>

                            <a href="<?= base_url('actividades/crear') ?>" class="nav-link-custom <?= url_is('actividades/crear') ? 'active' : '' ?>">
                                Agregar actividad
                            </a>

                            <a href="<?= base_url('actividades') ?>" class="nav-link-custom <?= url_is('actividades') ? 'active' : '' ?>">
                                Administrar actividades
                            </a>

                            <a href="<?= base_url('alojamientos/crear') ?>" class="nav-link-custom <?= url_is('alojamientos/crear') ? 'active' : '' ?>">
                                Agregar alojamientos
                            </a>

                            <a href="<?= base_url('alojamientos') ?>" class="nav-link-custom <?= url_is('alojamientos') ? 'active' : '' ?>">
                                Administrar alojamientos
                            </a>

                            <a href="<?= base_url('reservas') ?>" class="nav-link-custom <?= url_is('reservas') ? 'active' : '' ?>">
                                Administrar reservas
                            </a>

                            <a href="<?= base_url('usuarios') ?>" class="nav-link-custom <?= url_is('usuarios') ? 'active' : '' ?>">
                                Usuarios
                            </a>

                        <?php else: ?>

                            <a href="<?= base_url('/') ?>" class="nav-link-custom <?= (url_is('/') || url_is('')) ? 'active' : '' ?>">
                                Página Principal
                            </a>

                            <a href="<?= base_url('atractivos') ?>" class="nav-link-custom <?= url_is('atractivos') ? 'active' : '' ?>">
                                Destinos y Atractivos
                            </a>

                            <a href="<?= base_url('experiencias') ?>" class="nav-link-custom <?= url_is('experiencias') ? 'active' : '' ?>">
                                Gastronomía y Aventura
                            </a>

                            <a href="<?= base_url('sobre-misiones') ?>" class="nav-link-custom <?= url_is('sobre-misiones') ? 'active' : '' ?>">
                                Cultura y Geografía
                            </a>

                            <a href="<?= base_url('info-practica') ?>" class="nav-link-custom <?= url_is('info-practica') ? 'active' : '' ?>">
                                Guía al Viajero
                            </a>

                        <?php endif; ?>

                    </nav>
                </div>

                <div class="col-xl-2 d-flex justify-content-center justify-content-xl-end">
                    <?php if (session()->get('logueado')): ?>
        
                        <!-- desplegable del usuario-->
                        <div class="dropdown">
                            <button class="btn btn-outline-light btn-sm rounded-pill px-3 fw-bold dropdown-toggle d-flex align-items-center gap-1" 
                                    type="button" 
                                    id="userDropdown" 
                                    data-bs-toggle="dropdown" 
                                    aria-expanded="false">
                                <i class="bi bi-person-circle"></i>
                                <?= session()->get('nombre') ?> <?= session()->get('apellido') ?>
                            </button>
            
                            <ul class="dropdown-menu dropdown-menu-end shadow-lg border-0 rounded-3 mt-2" aria-labelledby="userDropdown">
                                <li>
                                    <div class="dropdown-header">
                                        <span class="d-block text-truncate fw-bold text-dark"><?= session()->get('email') ?></span>
                                        <small class="text-muted text-capitalize"><?= session()->get('rol') ?></small>
                                    </div>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center gap-2" href="<?= base_url('perfil') ?>">
                                        <i class="bi bi-person"></i> Mi Perfil
                                    </a>
                                </li>
                                <?php if (session()->get('rol') === 'cliente'): ?>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center gap-2" href="<?= base_url('reservas') ?>">
                                            <i class="bi bi-journal-check"></i> Mis Reservas
                                        </a>
                                    </li>
                                <?php endif; ?>

                                <!-- Opciones exclusivas para Administrador -->
                                <?php if (session()->get('rol') === 'admin'): ?>
                                    <li><hr class="dropdown-divider"></li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center gap-2 text-success fw-bold" href="<?= base_url('actividades/crear') ?>">
                                            <i class="bi bi-plus-circle"></i> Nueva actividad
                                        </a>
                                    </li>
                                <?php endif; ?>

                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center gap-2 text-danger fw-bold" href="<?= base_url('logout') ?>">
                                        <i class="bi bi-box-arrow-right"></i> Cerrar Sesión
                                    </a>
                                </li>

                            </ul>
                        </div>

                    <?php else: ?>

                        <a href="<?= base_url('login') ?>" class="btn btn-outline-light btn-sm rounded-pill px-3 fw-bold text-nowrap">
                            Iniciar Sesión
                        </a>

                    <?php endif; ?>
                </div>

            </div>
        </div>
    </header>

    <div style="background-color: #E6A100; height: 3px;"></div>
    
    <main class="flex-grow-1"> <!-- Empuja el footer al final -->