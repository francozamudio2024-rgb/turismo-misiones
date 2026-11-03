<?php
    $seccion = 'actividades';
    include(APPPATH . 'Views/template/header.php');
?>

<main class="container my-5 px-3 px-md-4" style="max-width: 850px;">

    <article class="card border-0 shadow-sm rounded-4 overflow-hidden bg-white">

        <?php if (!empty($alojamiento['imagen'])): ?>
            <img src="<?= base_url('img/alojamientos/' . $alojamiento['imagen']) ?>" 
                 alt="<?= esc($alojamiento['nombre']) ?>" 
                 class="card-img-top object-fit-cover" 
                 style="height: 350px;">
        <?php endif; ?>

        <div class="card-body p-4 p-md-5">

            <span class="fw-bold small text-uppercase d-block mb-1" style="color: #286b46; letter-spacing: 0.5px;">
                <?= esc($alojamiento['tipo']) ?>
            </span>

            <h2 class="display-6 fw-bold mb-3" style="font-family: Georgia, serif; color: #174d3c;">
                <?= esc($alojamiento['nombre']) ?>
            </h2>

            <div class="text-secondary small mb-3">
                📍 <strong>Ubicación:</strong> <?= esc($alojamiento['ubicacion']) ?>
            </div>

            <div class="fs-3 fw-bold mb-4" style="color: #174d3c;">
                $<?= number_format((float)$alojamiento['precios'], 2, ',', '.') ?> 
                <span class="fs-6 fw-normal text-secondary">/ por noche</span>
            </div>

            <hr class="my-4 text-secondary opacity-25">

            <p class="card-text text-secondary mb-4" style="line-height: 1.7; font-size: 1.05rem;">
                <?= nl2br(esc($alojamiento['descripcion'] ?? '')) ?>
            </p>

            <div class="pt-2">
                <a href="<?= site_url('alojamientos') ?>" class="btn text-white fw-bold px-4 py-2 rounded-3" style="background-color: #286b46;">
                    ← Volver al catálogo
                </a>
            </div>

        </div>

    </article>

</main>

<?php
    include(APPPATH . 'Views/template/footer.php');
?>