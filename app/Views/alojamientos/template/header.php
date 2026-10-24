<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turismo Misiones</title>

    <!-- CSS de Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- archivo css -->
    <link rel="stylesheet" href="<?= base_url('css/estilos.css') ?>">
</head>
<body class="bg-light text-dark d-flex flex-column min-vh-100">

    <!-- ENCABEZADO / NAVBAR -->
    <header class="bg-verde-misiones text-white py-3 shadow-sm">
        <div class="container-fluid px-lg-4 px-xl-5">
            <div class="row align-items-center text-center text-xl-start">
            
                <!-- Columna Izquierda -->
                <div class="col-xl-3 mb-3 mb-xl-0">
                    <a href="<?= base_url('/') ?>" class="text-white text-decoration-none">
                        <h1 class="h4 mb-0 fw-bold tracking-wide d-inline-block">Turismo Misiones</h1>
                    </a>
                </div>

                <!-- Columna Centro -->
                <div class="col-xl-7 mb-3 mb-xl-0 d-flex justify-content-center">
                    <nav class="d-flex gap-3 gap-xxl-4 flex-wrap justify-content-center">
        
                        <a href="<?= base_url('/') ?>" class="nav-link-custom <?php if ($seccion == 'inicio'): ?>active<?php endif; ?>">
                            Página Principal
                        </a>

                        <a href="<?= base_url('atractivos') ?>" class="nav-link-custom <?php if ($seccion == 'atractivos'): ?>active<?php endif; ?>">
                            Destinos y Atractivos
                        </a>

                        <a href="<?= base_url('experiencias') ?>" class="nav-link-custom <?php if ($seccion == 'experiencias'): ?>active<?php endif; ?>">
                            Gastronomía y Aventura
                        </a>

                        <a href="<?= base_url('sobre-misiones') ?>" class="nav-link-custom <?php if ($seccion == 'sobre_misiones'): ?>active<?php endif; ?>">
                            Cultura y Geografía
                        </a>

                        <a href="<?= base_url('info-practica') ?>" class="nav-link-custom <?php if ($seccion == 'info_practica'): ?>active<?php endif; ?>">
                            Guía al Viajero
                        </a>

                 </nav>
                </div>

                <!-- Columna Derecha -->
                <div class="col-xl-2 d-flex justify-content-center justify-content-xl-end">
                    <a href="<?= base_url('login') ?>" class="btn btn-outline-light btn-sm rounded-pill px-3 fw-bold text-nowrap">
                        Iniciar Sesión
                    </a>
                </div>

            </div>
        </div>
    </header>
    <div style="background-color: #E6A100; height: 3px;"></div>
    <main class="flex-grow-1"> <!-- Empuja el footer al final -->