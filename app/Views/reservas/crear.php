<?php
    $seccion = 'actividades';
    include(APPPATH . 'Views/template/header.php');
?>

<main class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-7">

            <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                <div class="card-header text-white p-4" style="background-color: #174d3c;">
                    <h2 class="fw-bold mb-1">Reservar actividad</h2>
                    <p class="mb-0">Completá los datos para confirmar tu reserva.</p>
                </div>

                <div class="card-body p-4">

                    <?php if (session()->getFlashdata('error')): ?>
                        <div class="alert alert-danger">
                            <?= esc(session()->getFlashdata('error')) ?>
                        </div>
                    <?php endif; ?>

                    <div class="mb-4">
                        <h4 class="fw-bold"><?= esc($actividad['nombre']) ?></h4>

                        <p class="text-muted mb-1">
                            <?= esc($actividad['categoria']) ?> |
                            <?= esc($actividad['ubicacion']) ?>
                        </p>

                        <p class="mb-1">
                            Precio por persona:
                            <strong>
                                $<?= number_format((float) $actividad['precios'], 0, ',', '.') ?>
                            </strong>
                        </p>

                        <p class="mb-1">
                            Fecha de la actividad:
                            <strong>
                                <?= !empty($actividad['fecha_salida']) ? date('d/m/Y', strtotime($actividad['fecha_salida'])) : 'Sin fecha asignada' ?>
                            </strong>
                        </p>

                        <p class="mb-1">
                            Horario:
                            <strong>
                                <?= !empty($actividad['hora_salida']) ? date('H:i', strtotime($actividad['hora_salida'])) . ' hs' : 'Sin horario asignado' ?>
                            </strong>
                        </p>

                        <p class="mb-0">
                            Cupos disponibles:
                            <strong><?= esc($actividad['cupos']) ?></strong>
                        </p>
                    </div>

                    <form action="<?= base_url('reservas/guardar') ?>" method="post">
                        <?= csrf_field() ?>

                        <input
                            type="hidden"
                            name="actividad_id"
                            value="<?= esc($actividad['id']) ?>"
                        >

                        <div class="mb-4">
                            <label for="cantidad" class="form-label fw-semibold">
                                Cantidad de personas
                            </label>

                            <input
                                type="number"
                                class="form-control"
                                id="cantidad"
                                name="cantidad"
                                min="1"
                                max="<?= esc($actividad['cupos']) ?>"
                                value="1"
                                required
                            >
                        </div>

                        <div class="d-flex flex-column flex-sm-row gap-2">
                            <button
                                type="submit"
                                class="btn btn-success fw-bold px-4"
                                style="background-color: #174d3c;"
                            >
                                Confirmar reserva
                            </button>

                            <a
                                href="<?= base_url('actividades') ?>"
                                class="btn btn-outline-secondary px-4"
                            >
                                Volver a actividades
                            </a>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</main>

<?php
    include(APPPATH . 'Views/template/footer.php');
?>