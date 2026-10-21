<?php
    $seccion = 'actividades';
    include("template/header.php");
?>

<!-- PORTADA / HERO SECTION -->
<section class="position-relative text-white py-5 d-flex align-items-center" 
         style="min-height: 350px; background: linear-gradient(rgba(16, 44, 36, 0.65), rgba(16, 44, 36, 0.65)), url('<?= base_url('img/fondo2.jpg') ?>') center/cover no-repeat;">
    <div class="container px-4 px-lg-5">
        <div class="row">
            <div class="col-lg-8 col-xl-7">
                <h2 class="display-4 fw-bold mb-3">Viví una experiencia única en Misiones</h2>
                <p class="lead fs-5 mb-0">
                    Explorá paisajes, lugares y actividades para disfrutar de la provincia.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CONTENIDO PRINCIPAL -->
<main class="container my-5 px-4 px-lg-5">

    <!-- ENCABEZADO DE ACTIVIDADES -->
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3 mb-4">
        <div>
            <h2 class="fw-bold text-success mb-1" style="color: #174d3c !important;">Nuestras actividades</h2>
            <p class="text-muted mb-0">Elegí una propuesta y descubrí nuevos lugares.</p>
        </div>

        <!-- Botón visible únicamente para administradores -->
        <?php if (session()->get('rol') === 'admin'): ?>
            <a href="<?= base_url('actividades/crear') ?>" class="btn btn-success fw-bold px-4 py-2 text-nowrap" style="background-color: #174d3c; border-color: #174d3c;">
                <i class="bi bi-plus-circle me-1"></i> Agregar actividad
            </a>
        <?php endif; ?>
    </div>

    <!-- TARJETAS / GRID DE ACTIVIDADES -->
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

        <?php if (!empty($actividades)): ?>

            <?php foreach ($actividades as $actividad): ?>

                <div class="col">
                    <article class="card h-100 shadow-sm border-0 rounded-3 overflow-hidden">

                        <!-- Imagen -->
                        <img src="<?= base_url('img/' . $actividad['imagen']) ?>" 
                             class="card-img-top object-fit-cover" 
                             alt="<?= esc($actividad['nombre']) ?>" 
                             style="height: 220px;">

                        <div class="card-body d-flex flex-column p-4">

                            <!-- Categoría -->
                            <span class="text-uppercase fw-bold text-success fs-7 mb-2" style="font-size: 0.75rem; letter-spacing: 0.5px;">
                                <?= esc($actividad['categoria']) ?>
                            </span>

                            <!-- Nombre -->
                            <h3 class="card-title h5 fw-bold text-dark mb-2">
                                <?= esc($actividad['nombre']) ?>
                            </h3>

                            <!-- Ubicación -->
                            <p class="card-subtitle text-secondary fw-semibold small mb-3">
                                <i class="bi bi-geo-alt-fill text-danger me-1"></i><?= esc($actividad['ubicacion']) ?>
                            </p>

                            <!-- Descripción -->
                            <p class="card-text text-muted small flex-grow-1 mb-3" style="line-height: 1.5;">
                                <?= esc($actividad['descripcion']) ?>
                            </p>

                            <!-- Cupos -->
                            <p class="card-text small text-muted mb-2">
                                <i class="bi bi-people-fill me-1"></i>Cupos disponibles: <strong><?= esc($actividad['cupos']) ?></strong>
                            </p>

                            <!-- Precio -->
                            <div class="h4 fw-bold my-3" style="color: #174d3c;">
                                $<?= number_format((float) $actividad['precios'], 0, ',', '.') ?>
                            </div>

                            <!-- Botones de Acción -->
                            <div class="d-flex gap-2 mt-auto pt-2 border-top">
                                
                                <!-- Botón Reservar para clientes/visitantes -->
                                <a href="<?= base_url('reservas') ?>" class="btn btn-outline-success btn-sm w-100 fw-bold">
                                    Reservar
                                </a>

                                <!-- Opciones exclusivas de edición/eliminación para Administradores -->
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
    include("template/footer.php");
?>