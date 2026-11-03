<?php
    $seccion = 'actividades';
    include(APPPATH . 'Views/template/header.php');
?>

<main class="container my-5 px-3 px-md-4" style="max-width: 1200px;">

    <div class="text-center mb-4">
        <h2 class="display-5 fw-bold mb-2" style="font-family: Georgia, serif; color: #174d3c;">
            Alojamientos
        </h2>
        <p class="text-secondary fs-5 mb-0" style="max-width: 700px; margin: auto;">
            Encontrá un lugar para descansar y disfrutar tu estadía en Misiones.
        </p>
    </div>

    <!-- boton agregar del admin) -->
    <?php if (session()->get('rol') === 'admin'): ?>
        <div class="mb-4">
            <a href="<?= base_url('alojamientos/crear') ?>" class="btn text-white fw-bold px-4 py-2 rounded-3" style="background-color: #286b46;">
                + Agregar alojamiento
            </a>
        </div>
    <?php endif; ?>

    <?php if (empty($alojamientos)): ?>

        <div class="card border-0 shadow-sm rounded-4 p-5 text-center bg-white my-4">
            <h3 class="h4 fw-bold mb-2" style="font-family: Georgia, serif; color: #174d3c;">
                Todavía no hay alojamientos
            </h3>
            <p class="text-secondary mb-0">
                Agregá el primero para comenzar a completar el catálogo.
            </p>
        </div>

    <?php else: ?>

        <!--grid-->
        <div class="row g-4">

            <?php foreach ($alojamientos as $alojamiento): ?>

                <div class="col-md-6 col-lg-4">
                    <article class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden bg-white">

                        <?php if (!empty($alojamiento['imagen'])): ?>
                            <img src="<?= base_url('img/alojamientos/' . $alojamiento['imagen']) ?>"
                                 alt="<?= esc($alojamiento['nombre']) ?>" 
                                 class="card-img-top object-fit-cover" 
                                 style="height: 210px;">
                        <?php else: ?>
                            <div class="d-flex align-items-center justify-content-center bg-secondary-subtle text-secondary fw-bold" 
                                 style="height: 210px;">
                                Sin imagen
                            </div>
                        <?php endif; ?>

                        <div class="card-body p-4 d-flex flex-column">

                            <h3 class="h4 fw-bold mb-2" style="color: #174d3c;">
                                <?= esc($alojamiento['nombre']) ?>
                            </h3>

                            <div class="fw-bold small text-uppercase mb-1" style="color: #286b46; letter-spacing: 0.5px;">
                                <?= esc($alojamiento['tipo']) ?>
                            </div>

                            <div class="text-secondary small mb-2">
                                📍 <?= esc($alojamiento['ubicacion']) ?>
                            </div>

                            <div class="fs-4 fw-bold mb-3" style="color: #174d3c;">
                                $<?= number_format((float)$alojamiento['precios'], 2, ',', '.') ?>
                            </div>

                            <p class="card-text text-secondary small mb-4" style="line-height: 1.6;">
                                <?= esc($alojamiento['descripcion']) ?>
                            </p>

                            <!-- botones detalles y editar del admin -->
                            <div class="mt-auto pt-3 border-top d-flex flex-column gap-2">

                                <a href="<?= site_url('alojamientos/detalle/' . $alojamiento['id']) ?>" 
                                   class="btn btn-outline-success fw-bold w-100 py-2 rounded-3" 
                                   style="color: #174d3c; border-color: #286b46;">
                                    Ver detalle
                                </a>

                                <?php if (session()->get('rol') === 'admin'): ?>
                                    <div class="d-flex gap-2 mt-1">
                                        <a href="<?= base_url('alojamientos/editar/' . $alojamiento['id']) ?>" 
                                           class="btn btn-warning fw-bold flex-grow-1 py-2 rounded-3 text-dark">
                                            Editar
                                        </a>

                                        <form action="<?= base_url('alojamientos/eliminar/' . $alojamiento['id']) ?>" 
                                              method="POST" 
                                              class="flex-grow-1"
                                              onsubmit="return confirm('¿Eliminar este alojamiento?');">
                                            <?= csrf_field() ?>
                                            <button type="submit" class="btn btn-danger fw-bold w-100 py-2 rounded-3">
                                                Eliminar
                                            </button>
                                        </form>
                                    </div>
                                <?php endif; ?>

                            </div>

                        </div>
                    </article>
                </div>

            <?php endforeach; ?>

        </div>

    <?php endif; ?>

</main>

<?php
    include(APPPATH . 'Views/template/footer.php');
?>