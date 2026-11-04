<?php
    $seccion = 'alojamientos';
    include(APPPATH . 'Views/template/header.php');

    $cuposDisponibles = (int) ($alojamiento['cupos'] ?? 0);
?>

<main class="container my-5 px-3 px-md-4" style="max-width: 950px;">

    <!-- Mensajes de Alerta/Error si la validación del controlador falla -->
    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger alert-dismissible fade show rounded-3 shadow-sm mb-4" role="alert">
            <i class="bi bi-exclamation-triangle-fill me-2"></i><?= session()->getFlashdata('error') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <div class="row g-4">

        <!-- Columna Izquierda: Detalle del Alojamiento -->
        <div class="col-lg-7">
            <article class="card border-0 shadow-sm rounded-4 overflow-hidden bg-white h-100">

                <?php 
                    $nombreFoto = $alojamiento['imagen'] ?? 'default.jpg';
                    $rutaFisica = FCPATH . 'img/alojamientos/' . $nombreFoto;
                    $srcImagen = (is_file($rutaFisica)) ? base_url('img/alojamientos/' . $nombreFoto) : base_url('img/alojamientos/default.jpg');
                ?>
                <img src="<?= $srcImagen ?>?v=<?= time() ?>" 
                     alt="<?= esc($alojamiento['nombre']) ?>" 
                     class="card-img-top object-fit-cover" 
                     style="height: 280px;">

                <div class="card-body p-4">

                    <span class="fw-bold small text-uppercase d-block mb-1" style="color: #286b46; letter-spacing: 0.5px;">
                        <?= esc($alojamiento['tipo']) ?>
                    </span>

                    <h2 class="h3 fw-bold mb-2" style="color: #174d3c;">
                        <?= esc($alojamiento['nombre']) ?>
                    </h2>

                    <div class="text-secondary small mb-3">
                        <i class="bi bi-geo-alt-fill text-danger me-1"></i><strong>Ubicación:</strong> <?= esc($alojamiento['ubicacion']) ?>
                    </div>

                    <p class="card-text text-muted small mb-3" style="line-height: 1.6;">
                        <?= nl2br(esc($alojamiento['descripcion'] ?? '')) ?>
                    </p>

                    <div class="d-flex align-items-center justify-content-between pt-3 border-top">
                        <span class="text-muted small">Precio por noche:</span>
                        <div class="fs-4 fw-bold" style="color: #174d3c;">
                            $<?= number_format((float)($alojamiento['precios'] ?? 0), 0, ',', '.') ?>
                        </div>
                    </div>

                </div>

            </article>
        </div>

        <!-- Columna Derecha: Formulario de Reserva -->
        <div class="col-lg-5">
            <div class="card border-0 shadow-sm rounded-4 bg-white p-4 h-100 d-flex flex-column justify-content-between">

                <div>
                    <h3 class="h5 fw-bold mb-3" style="color: #174d3c;">
                        <i class="bi bi-calendar-check me-2"></i>Confirmar Reserva
                    </h3>

                    <!-- Estado de Cupos -->
                    <div class="p-3 rounded-3 mb-4 <?= $cuposDisponibles > 0 ? 'bg-light' : 'bg-danger-subtle' ?>">
                        <div class="d-flex align-items-center justify-content-between">
                            <span class="small fw-semibold text-secondary">Cupos disponibles:</span>
                            <span class="badge <?= $cuposDisponibles > 0 ? 'bg-success' : 'bg-danger' ?> px-3 py-2 fs-6">
                                <?= $cuposDisponibles ?>
                            </span>
                        </div>
                    </div>

                    <?php if ($cuposDisponibles > 0): ?>
                        <form action="<?= base_url('alojamientos/procesarReserva') ?>" method="post" id="formReserva">
                            <?= csrf_field() ?>
                            <input type="hidden" name="alojamiento_id" value="<?= esc($alojamiento['id']) ?>">

                            <!-- Selección de Cantidad -->
                            <div class="mb-4">
                                <label for="cantidad" class="form-label fw-semibold text-secondary small">
                                    ¿Cuántos cupos/lugares querés reservar?
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">
                                        <i class="bi bi-people-fill text-muted"></i>
                                    </span>
                                    <input type="number" 
                                           class="form-control border-start-0 ps-0 text-center fw-bold fs-5" 
                                           id="cantidad" 
                                           name="cantidad" 
                                           value="1" 
                                           min="1" 
                                           max="<?= $cuposDisponibles ?>" 
                                           required>
                                </div>
                                <div class="form-text small text-muted">
                                    Podés reservar hasta un máximo de <?= $cuposDisponibles ?> cupos.
                                </div>
                            </div>

                            <!-- Cálculo del Total Estimado -->
                            <div class="p-3 bg-light rounded-3 mb-4">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="fw-semibold text-secondary small">Total a pagar:</span>
                                    <span class="fs-4 fw-bold text-success" id="precioTotal">
                                        $<?= number_format((float)($alojamiento['precios'] ?? 0), 0, ',', '.') ?>
                                    </span>
                                </div>
                            </div>

                            <!-- Botón de Confirmación -->
                            <button type="submit" class="btn text-white fw-bold w-100 py-3 rounded-3 shadow-sm mb-3" style="background-color: #174d3c;">
                                <i class="bi bi-check-circle-fill me-2"></i>Confirmar Reserva
                            </button>
                        </form>
                    <?php else: ?>
                        <div class="alert alert-warning text-center py-3 mb-4" role="alert">
                            <i class="bi bi-exclamation-circle fs-4 d-block mb-2"></i>
                            Este alojamiento no tiene cupos disponibles en este momento.
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Botón Volver -->
                <div class="pt-3 border-top">
                    <a href="<?= base_url('alojamientos') ?>" class="btn btn-outline-secondary w-100 fw-semibold py-2">
                        ← Volver al catálogo
                    </a>
                </div>

            </div>
        </div>

    </div>

</main>

<!-- Script para actualizar dinámicamente el precio total según los cupos seleccionados -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const inputCantidad = document.getElementById('cantidad');
        const spanTotal = document.getElementById('precioTotal');
        const precioUnitario = <?= (float)($alojamiento['precios'] ?? 0) ?>;

        if (inputCantidad && spanTotal) {
            inputCantidad.addEventListener('input', function () {
                let cantidad = parseInt(this.value) || 1;
                const max = parseInt(this.getAttribute('max')) || 1;

                if (cantidad < 1) cantidad = 1;
                if (cantidad > max) cantidad = max;

                const total = cantidad * precioUnitario;
                spanTotal.textContent = '$' + new Intl.NumberFormat('es-AR').format(total);
            });
        }
    });
</script>

<?php
    include(APPPATH . 'Views/template/footer.php');
?>