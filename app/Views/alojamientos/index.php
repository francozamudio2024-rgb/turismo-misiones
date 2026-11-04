<?php
    $seccion = 'alojamientos';
    include(APPPATH . 'Views/template/header.php');
?>

<!-- hero section -->
<section class="position-relative text-white py-5 d-flex align-items-center" 
         style="min-height: 350px; background: linear-gradient(rgba(16, 44, 36, 0.65), rgba(16, 44, 36, 0.65)), url('<?= base_url('img/home/fondo2.jpg') ?>') center/cover no-repeat;">
    <div class="container px-4 px-lg-5">
        <div class="row">
            <div class="col-lg-8 col-xl-7">
                <h2 class="display-4 fw-bold mb-3">Encontrá tu lugar ideal en Misiones</h2>
                <p class="lead fs-5 mb-0">
                    Descubrí hoteles, cabañas y hospedajes para descansar y disfrutar de tu estadía.
                </p>
            </div>
        </div>
    </div>
</section>

<main class="container my-5 px-4 px-lg-5">

    <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3 mb-4">
        <div>
            <h2 class="fw-bold text-success mb-1" style="color: #174d3c !important;">Nuestros alojamientos</h2>
            <p class="text-muted mb-0">Elegí el hospedaje que mejor se adapte a tu viaje.</p>
        </div>

        <!-- boton de agregar alojamientos -->
        <?php if (session()->get('rol') === 'admin'): ?>
            <a href="<?= base_url('alojamientos/crear') ?>" class="btn btn-success fw-bold px-4 py-2 text-nowrap" style="background-color: #174d3c; border-color: #174d3c;">
                <i class="bi bi-plus-circle me-1"></i> Agregar alojamiento
            </a>
        <?php endif; ?>
    </div>

    <!-- grid de alojamientos -->
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

        <?php if (!empty($alojamientos)): ?>

            <?php foreach ($alojamientos as $alojamiento): ?>

                <!-- filtro de inactivos para usuario logeado-->
                <?php if (($alojamiento['estado'] ?? 'A') === 'A' || session()->get('rol') === 'admin'): ?> 

                    <?php 
                        $esInactivo = (($alojamiento['estado'] ?? 'A') === 'I');
                    ?>

                    <div class="col">
                        <article class="card h-100 shadow-sm border-0 rounded-3 overflow-hidden <?= $esInactivo ? 'bg-light' : '' ?>" 
                                 style="<?= $esInactivo ? 'opacity: 0.75;' : '' ?>">

                            <!-- banda de aviso de eliminacion, solo admin lo ve -->
                            <?php if ($esInactivo): ?>
                                <div class="bg-secondary text-white text-center py-1 fw-bold small text-uppercase" style="letter-spacing: 1px; font-size: 0.75rem;">
                                    <i class="bi bi-eye-slash-fill me-1"></i> Alojamiento Eliminado
                                </div>
                            <?php endif; ?>

                            <!-- Iimagen del alojamiento-->
                            <?php 
                                $nombreFoto = $alojamiento['imagen'] ?? 'default.jpg';
                                $rutaFisica = FCPATH . 'img/alojamientos/' . $nombreFoto;
                                $srcImagen = (is_file($rutaFisica)) ? base_url('img/alojamientos/' . $nombreFoto) : base_url('img/alojamientos/default.jpg');
                            ?>
                            <img src="<?= $srcImagen ?>?v=<?= time() ?>" 
                                 class="card-img-top object-fit-cover" 
                                 alt="<?= esc($alojamiento['nombre']) ?>" 
                                 style="height: 220px; <?= $esInactivo ? 'filter: grayscale(100%);' : '' ?>">

                            <div class="card-body d-flex flex-column p-4">

                                <!-- categoría -->
                                <span class="text-uppercase fw-bold <?= $esInactivo ? 'text-secondary' : 'text-success' ?> fs-7 mb-2" style="font-size: 0.75rem; letter-spacing: 0.5px;">
                                    <?= esc($alojamiento['tipo']) ?>
                                </span>

                                <!-- nombre -->
                                <h3 class="card-title h5 fw-bold <?= $esInactivo ? 'text-muted' : 'text-dark' ?> mb-2">
                                    <?= esc($alojamiento['nombre']) ?>
                                </h3>

                                <!-- ubicacion -->
                                <p class="card-subtitle text-secondary fw-semibold small mb-3">
                                    <i class="bi bi-geo-alt-fill text-danger me-1"></i><?= esc($alojamiento['ubicacion']) ?>
                                </p>

                                <!-- descripcion -->
                                <p class="card-text text-muted small mb-3" style="line-height: 1.5;">
                                    <?= esc($alojamiento['descripcion'] ?? '') ?>
                                </p>

                                <!-- cupos disponibles -->
                                <p class="card-text small text-muted mb-2">
                                    <i class="bi bi-people-fill me-1"></i>Cupos disponibles: <strong><?= esc($alojamiento['cupos'] ?? 0) ?></strong>
                                </p>

                                <!-- badges-->
                                <?php 
                                    $cuposDisponibles = (int) ($alojamiento['cupos'] ?? 0);
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

                                        <?php if (!empty($alojamiento['recomendado'])): ?>
                                            <span class="badge rounded-pill px-3 py-2 fw-semibold shadow-sm" 
                                                  style="background-color: #28744f; color: #ffffff; letter-spacing: 0.2px; font-size: 0.75rem;">
                                                Recomendado para esta temporada
                                            </span>
                                        <?php endif; ?>

                                        <?php if (!empty($alojamiento['mas_elegido'])): ?>
                                            <span class="badge rounded-pill px-3 py-2 fw-semibold shadow-sm" 
                                                  style="background-color: #174d3c; color: #e3e9e2; border: 1px solid #43805f; font-size: 0.75rem;">
                                                Más elegido
                                            </span>
                                        <?php endif; ?>
                                    <?php endif; ?>

                                </div>

                                <!-- preciio -->
                                <div class="h4 fw-bold mb-3" style="color: <?= $esInactivo ? '#6c757d' : '#174d3c' ?>;">
                                    $<?= number_format((float) ($alojamiento['precios'] ?? 0), 0, ',', '.') ?>
                                    <span class="fs-6 fw-normal text-muted">/ noche</span>
                                </div>

                                <!-- buttons -->
                                <div class="d-flex gap-2 mt-auto pt-2 border-top">
                                    
                                    <?php if (session()->get('rol') === 'cliente'): ?>
                                        <?php if ($cuposDisponibles > 0 && !$esInactivo): ?>
                                            <a href="<?= base_url('alojamientos/reserva/' . $alojamiento['id']) ?>" class="btn btn-outline-success btn-sm w-100 fw-bold">
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
                                        <a href="<?= base_url('alojamientos/reservas/' . $alojamiento['id']) ?>" 
                                           class="btn btn-outline-primary btn-sm fw-bold px-2" 
                                           title="Revisar reservas de este alojamiento">
                                            <i class="bi bi-calendar-check me-1"></i> Reservas
                                        </a>

                                        <a href="<?= base_url('alojamientos/editar/' . $alojamiento['id']) ?>" 
                                           class="btn btn-warning btn-sm fw-bold px-3">
                                            Editar
                                        </a>

                                        <?php if (!$esInactivo): ?>
                                            <form action="<?= base_url('alojamientos/eliminar/' . $alojamiento['id']) ?>" 
                                                  method="post" 
                                                  onsubmit="return confirm('¿Seguro que querés eliminar este alojamiento?');" 
                                                  class="d-inline">
                                                <?= csrf_field() ?>
                                                <button type="submit" class="btn btn-danger btn-sm fw-bold px-3">
                                                    Eliminar
                                                </button>
                                            </form>
                                        <?php else: ?>
                                            <button class="btn btn-secondary btn-sm fw-bold px-3" disabled>
                                                Eliminado
                                            </button>
                                        <?php endif; ?>
                                    <?php endif; ?>

                                </div>

                            </div>

                        </article>
                    </div>

                <?php endif; ?>

            <?php endforeach; ?>

        <?php else: ?>

            <div class="col-12">
                <div class="alert alert-info text-center py-4 rounded-3 shadow-sm" role="alert">
                    <i class="bi bi-info-circle fs-4 d-block mb-2"></i>
                    Todavía no hay alojamientos publicados.
                </div>
            </div>

        <?php endif; ?>

    </div>

</main>

<?php
    include(APPPATH . 'Views/template/footer.php');
?>