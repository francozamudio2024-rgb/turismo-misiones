<?php
    $seccion = 'actividades';
    include(APPPATH . 'Views/template/header.php');
?>

<<<<<<< HEAD
<!-- hero section -->
<section class="position-relative text-white py-5 d-flex align-items-center" 
         style="min-height: 350px; background: linear-gradient(rgba(16, 44, 36, 0.65), rgba(16, 44, 36, 0.65)), url('<?= base_url('img/home/fondo2.jpg') ?>') center/cover no-repeat;">
=======
<section class="position-relative text-white py-5 d-flex align-items-center"
         style="min-height: 350px; background: linear-gradient(rgba(16, 44, 36, 0.65), rgba(16, 44, 36, 0.65)), url('<?= base_url('img/fondo2.jpg') ?>') center/cover no-repeat;">
>>>>>>> 3d73ad5 (modificacion de fecha y cupos)
    <div class="container px-4 px-lg-5">
        <div class="row">
            <div class="col-lg-8 col-xl-7">
                <h2 class="display-4 fw-bold mb-3">Viví las mejores actividades en Misiones</h2>
                <p class="lead fs-5 mb-0">
                    Explorá excursiones, deportes de aventura, paseos guiados y experiencias únicas en la selva.
                </p>
            </div>
        </div>
    </div>
</section>

<main class="container my-5 px-4 px-lg-5">

    <!-- Mensajes de Alerta / Flashdata -->
    <?php if (session()->getFlashdata('mensaje')): ?>
        <div class="alert alert-success alert-dismissible fade show rounded-3 shadow-sm mb-4" role="alert">
            <i class="bi bi-check-circle-fill me-2"></i><?= session()->getFlashdata('mensaje') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger alert-dismissible fade show rounded-3 shadow-sm mb-4" role="alert">
            <i class="bi bi-exclamation-triangle-fill me-2"></i><?= session()->getFlashdata('error') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3 mb-4">
        <div>
            <h2 class="fw-bold text-success mb-1" style="color: #174d3c !important;">Nuestras actividades</h2>
            <p class="text-muted mb-0">Elegí la experiencia que mejor se adapte a tu itinerario.</p>
        </div>

<<<<<<< HEAD
        <!-- boton de agregar actividades -->
=======
>>>>>>> 3d73ad5 (modificacion de fecha y cupos)
        <?php if (session()->get('rol') === 'admin'): ?>
            <a href="<?= base_url('actividades/crear') ?>" class="btn btn-success fw-bold px-4 py-2 text-nowrap" style="background-color: #174d3c; border-color: #174d3c;">
                <i class="bi bi-plus-circle me-1"></i> Agregar actividad
            </a>
        <?php endif; ?>
    </div>

<<<<<<< HEAD
    <!-- grid de actividades -->
=======
>>>>>>> 3d73ad5 (modificacion de fecha y cupos)
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

        <?php if (!empty($actividades)): ?>

            <?php foreach ($actividades as $actividad): ?>

<<<<<<< HEAD
                <!-- filtro de inactivos para usuario logeado-->
                <?php if (($actividad['estado'] ?? 'A') === 'A' || session()->get('rol') === 'admin'): ?> 

                    <?php 
                        $esInactivo = (($actividad['estado'] ?? 'A') === 'I');
                    ?>
=======
                <?php
                    $cupos = (int) $actividad['cupos'];
                    $imagenActividad = !empty($actividad['imagen']) ? $actividad['imagen'] : 'fondo.jpg';
                ?>

                <div class="col">
                    <article class="card h-100 shadow-sm border-0 rounded-3 overflow-hidden">

                        <img src="<?= base_url('img/' . $imagenActividad) ?>"
                             class="card-img-top object-fit-cover"
                             alt="<?= esc($actividad['nombre']) ?>"
                             style="height: 220px;">
>>>>>>> 3d73ad5 (modificacion de fecha y cupos)

                    <div class="col">
                        <article class="card h-100 shadow-sm border-0 rounded-3 overflow-hidden <?= $esInactivo ? 'bg-light' : '' ?>" 
                                 style="<?= $esInactivo ? 'opacity: 0.75;' : '' ?>">

<<<<<<< HEAD
                            <!-- banda de aviso de eliminacion, solo admin lo ve -->
                            <?php if ($esInactivo): ?>
                                <div class="bg-secondary text-white text-center py-1 fw-bold small text-uppercase" style="letter-spacing: 1px; font-size: 0.75rem;">
                                    <i class="bi bi-eye-slash-fill me-1"></i> Actividad Eliminada
                                </div>
                            <?php endif; ?>

                            <!-- Imagen de la actividad -->
                            <?php 
                                $nombreFoto = $actividad['imagen'] ?? 'default.jpg';
                                $rutaFisica = FCPATH . 'img/actividades/' . $nombreFoto;
                                $srcImagen = (is_file($rutaFisica)) ? base_url('img/actividades/' . $nombreFoto) : base_url('img/actividades/default.jpg');
                            ?>
                            <img src="<?= $srcImagen ?>?v=<?= time() ?>" 
                                 class="card-img-top object-fit-cover" 
                                 alt="<?= esc($actividad['nombre']) ?>" 
                                 style="height: 220px; <?= $esInactivo ? 'filter: grayscale(100%);' : '' ?>">

                            <div class="card-body d-flex flex-column p-4">

                                <!-- categoría -->
                                <span class="text-uppercase fw-bold <?= $esInactivo ? 'text-secondary' : 'text-success' ?> fs-7 mb-2" style="font-size: 0.75rem; letter-spacing: 0.5px;">
                                    <?= esc($actividad['categoria'] ?? $actividad['tipo'] ?? 'Aventura') ?>
                                </span>

                                <!-- nombre -->
                                <h3 class="card-title h5 fw-bold <?= $esInactivo ? 'text-muted' : 'text-dark' ?> mb-2">
                                    <?= esc($actividad['nombre']) ?>
                                </h3>

                                <!-- ubicacion -->
                                <p class="card-subtitle text-secondary fw-semibold small mb-3">
                                    <i class="bi bi-geo-alt-fill text-danger me-1"></i><?= esc($actividad['ubicacion'] ?? 'Misiones') ?>
                                </p>

                                <!-- descripcion -->
                                <p class="card-text text-muted small mb-3" style="line-height: 1.5;">
                                    <?= esc($actividad['descripcion'] ?? '') ?>
                                </p>

                                <!-- cupos disponibles -->
                                <p class="card-text small text-muted mb-2">
                                    <i class="bi bi-people-fill me-1"></i>Cupos disponibles: <strong><?= esc($actividad['cupos'] ?? 0) ?></strong>
                                </p>

                                <!-- badges -->
                                <?php 
                                    $cuposDisponibles = (int) ($actividad['cupos'] ?? 0);
                                    $limiteUltimosCupos = 5;
                                ?>
                                <div class="d-flex flex-wrap gap-2 mb-3 align-items-center flex-grow-1">

                                    <?php if ($esInactivo): ?>
                                        <span class="badge rounded-pill px-3 py-2 fw-bold text-uppercase shadow-sm bg-secondary text-white" 
                                              style="font-size: 0.78rem; letter-spacing: 0.5px;">
                                            Eliminado
                                        </span>
                                    <?php else: ?>

                                        <?php if ($cuposDisponibles <= 0): ?>
                                            <span class="badge rounded-pill px-3 py-2 fw-bold text-uppercase shadow-sm" 
                                                  style="background-color: #dc3545; color: #ffffff; font-size: 0.78rem; letter-spacing: 0.5px;">
                                                <i class="bi bi-x-circle-fill me-1"></i> Sin cupo
                                            </span>
                                        <?php elseif ($cuposDisponibles <= $limiteUltimosCupos): ?>
                                            <span class="badge rounded-pill px-3 py-2 fw-bold text-uppercase shadow-sm" 
                                                  style="background-color: #ffc107; color: #000000; border: 1px solid #e0a800; font-size: 0.78rem; letter-spacing: 0.5px;">
                                                <i class="bi bi-exclamation-triangle-fill me-1"></i> ¡Últimos cupos!
                                            </span>
                                        <?php endif; ?>

                                        <?php if (!empty($actividad['destacada'])): ?>
                                            <span class="badge rounded-pill px-3 py-2 fw-semibold shadow-sm" 
                                                  style="background-color: #28744f; color: #ffffff; letter-spacing: 0.2px; font-size: 0.75rem;">
                                                Recomendado para esta temporada
                                            </span>
                                        <?php endif; ?>

                                        <?php if (!empty($actividad['mas_buscada'])): ?>
                                            <span class="badge rounded-pill px-3 py-2 fw-semibold shadow-sm" 
                                                  style="background-color: #174d3c; color: #e3e9e2; border: 1px solid #43805f; font-size: 0.75rem;">
                                                Más elegido
                                            </span>
                                        <?php endif; ?>
                                    <?php endif; ?>

                                </div>

                                <!-- precio -->
                                <div class="h4 fw-bold mb-3" style="color: <?= $esInactivo ? '#6c757d' : '#174d3c' ?>;">
                                    $<?= number_format((float) ($actividad['precios'] ?? $actividad['precio'] ?? 0), 0, ',', '.') ?>
                                    <span class="fs-6 fw-normal text-muted">/ persona</span>
                                </div>

                                <!-- buttons -->
                                <div class="d-flex gap-2 mt-auto pt-2 border-top">
                                    
                                    <?php if (session()->get('rol') === 'cliente'): ?>
                                        <?php if ($cuposDisponibles > 0 && !$esInactivo): ?>
                                            <a href="<?= base_url('actividades/reserva/' . $actividad['id']) ?>" class="btn btn-outline-success btn-sm w-100 fw-bold">
                                                Reservar
                                            </a>
                                        <?php else: ?>
                                            <button class="btn btn-secondary btn-sm w-100 fw-bold" disabled>
                                                Sin disponibilidad
                                            </button>
                                        <?php endif; ?>
                                    <?php endif; ?>

                                    <!-- buttons de administrador -->
                                    <?php if (session()->get('rol') === 'admin'): ?>
                                        <a href="<?= base_url('actividades/editar/' . $actividad['id']) ?>" 
                                           class="btn btn-warning btn-sm fw-bold px-3 w-50">
                                            Editar
                                        </a>

                                        <?php if (!$esInactivo): ?>
                                            <form action="<?= base_url('actividades/eliminar/' . $actividad['id']) ?>" 
                                                  method="post" 
                                                  onsubmit="return confirm('¿Seguro que querés eliminar esta actividad?');" 
                                                  class="d-inline w-50">
                                                <?= csrf_field() ?>
                                                <button type="submit" class="btn btn-danger btn-sm fw-bold w-100">
                                                    Eliminar
                                                </button>
                                            </form>
                                        <?php else: ?>
                                            <button class="btn btn-secondary btn-sm fw-bold w-50" disabled>
                                                Eliminado
                                            </button>
                                        <?php endif; ?>
                                    <?php endif; ?>

                                </div>

                            </div>

                        </article>
                    </div>

                <?php endif; ?>
=======
                            <div class="d-flex flex-wrap gap-2 mb-2">
                                <span class="badge bg-success text-uppercase">
                                    <?= esc($actividad['categoria']) ?>
                                </span>

                                <?php if (!empty($actividad['temporada'])): ?>
                                    <span class="badge bg-info text-dark">
                                        <?= esc($actividad['temporada']) ?>
                                    </span>
                                <?php endif; ?>
                            </div>

                            <h3 class="card-title h5 fw-bold text-dark mb-2">
                                <?= esc($actividad['nombre']) ?>
                            </h3>

                            <p class="card-subtitle text-secondary fw-semibold small mb-3">
                                <i class="bi bi-geo-alt-fill text-danger me-1"></i><?= esc($actividad['ubicacion']) ?>
                            </p>

                            <p class="card-text text-muted small flex-grow-1 mb-3" style="line-height: 1.5;">
                                <?= esc($actividad['descripcion']) ?>
                            </p>

                            <div class="mb-2">
                                <?php if ($cupos === 0): ?>
                                    <span class="badge bg-danger">
                                        Sin cupos disponibles
                                    </span>
                                <?php elseif ($cupos < 5): ?>
                                    <span class="badge bg-warning text-dark">
                                        ¡Quedan pocos cupos! <?= $cupos ?> disponibles
                                    </span>
                                <?php else: ?>
                                    <span class="small text-muted">
                                        <i class="bi bi-people-fill me-1"></i>
                                        Cupos disponibles: <strong><?= $cupos ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>

                            <div class="h4 fw-bold my-3" style="color: #174d3c;">
                                $<?= number_format((float) $actividad['precios'], 0, ',', '.') ?>
                            </div>

                            <div class="d-flex gap-2 mt-auto pt-2 border-top">

                                <?php if (session()->get('rol') === 'cliente'): ?>
                                    <?php if ($cupos > 0): ?>
                                        <a href="<?= base_url('reservas/crear/' . $actividad['id']) ?>" class="btn btn-outline-success btn-sm w-100 fw-bold">
                                            Reservar
                                        </a>
                                    <?php else: ?>
                                        <button type="button" class="btn btn-secondary btn-sm w-100" disabled>
                                            Sin disponibilidad
                                        </button>
                                    <?php endif; ?>
                                <?php endif; ?>

                                <?php if (session()->get('rol') === 'admin'): ?>
                                    <a href="<?= base_url('actividades/editar/' . $actividad['id']) ?>"
                                       class="btn btn-warning btn-sm fw-bold px-3">
                                        Editar
                                    </a>

                                    <form action="<?= base_url('actividades/eliminar/' . $actividad['id']) ?>"
                                          method="post"
                                          onsubmit="return confirm('¿Seguro que querés eliminar esta actividad?');"
                                          class="d-inline">
                                        <?= csrf_field() ?>
                                        <button type="submit" class="btn btn-danger btn-sm fw-bold px-3">
                                            Eliminar
                                        </button>
                                    </form>
                                <?php endif; ?>

                            </div>

                        </div>
                    </article>
                </div>
>>>>>>> 3d73ad5 (modificacion de fecha y cupos)

            <?php endforeach; ?>

        <?php else: ?>

            <div class="col-12">
                <div class="alert alert-info text-center py-4 rounded-3 shadow-sm" role="alert">
                    <i class="bi bi-info-circle fs-4 d-block mb-2"></i>
                    Todavía no hay actividades publicadas.
                </div>
            </div>

        <?php endif; ?>

    </div>

</main>

<?php
    include(APPPATH . 'Views/template/footer.php');
?>