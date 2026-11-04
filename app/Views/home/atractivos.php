<?php
    $seccion = 'actividades';
    include(APPPATH . 'Views/template/header.php');
?>

<!-- hero section -->
<section class="position-relative text-white text-center py-5 rounded-bottom-4 overflow-hidden" 
         style="background: linear-gradient(rgba(23, 77, 60, 0.82), rgba(23, 77, 60, 0.82)), url('<?= base_url('img/home/fondo2.jpg') ?>') center/cover;">
    <div class="container py-5">
        <h2 class="display-4 fw-bold mb-3" style="font-family: Georgia, serif;">Destinos y Atractivos</h2>
        <p class="lead mx-auto mb-0 text-light fs-5" style="max-width: 720px; line-height: 1.7;">
            Descubrí los paisajes, lugares históricos y espacios naturales
            que hacen de Misiones uno de los destinos más destacados de Argentina.
        </p>
    </div>
</section>

<section class="py-5">
    <div class="container py-3">

        <h2 class="fw-bold mb-2" style="font-family: Georgia, serif; color: #174d3c; font-size: 32px;">
            Lugares imperdibles
        </h2>
        <p class="text-secondary mb-4 pb-2" style="max-width: 700px; line-height: 1.7;">
            Desde grandes saltos de agua hasta antiguas construcciones jesuíticas,
            Misiones combina naturaleza, historia y cultura en diferentes puntos de la provincia.
        </p>

        <!-- grid de tarjetas -->
        <div class="row g-4">

            <div class="col-md-6 col-lg-4">
                <article class="card h-100 border-0 rounded-4 shadow-sm overflow-hidden">
                    <img src="<?= base_url('img/home/fondo2.jpg') ?>" 
                         alt="Cataratas del Iguazú" 
                         class="card-img-top object-fit-cover" 
                         style="height: 220px;">
                    <div class="card-body p-4">
                        <span class="d-inline-block fw-bold small text-uppercase mb-2" style="color: #28744f; letter-spacing: 1px;">
                            Naturaleza
                        </span>
                        <h3 class="h4 fw-bold mb-2" style="color: #174d3c;">Cataratas del Iguazú</h3>
                        <p class="card-text text-secondary mb-0 small" style="line-height: 1.65;">
                            Uno de los principales atractivos naturales de Misiones,
                            conocido por sus enormes saltos de agua y la selva que los rodea.
                        </p>
                    </div>
                </article>
            </div>

            <div class="col-md-6 col-lg-4">
                <article class="card h-100 border-0 rounded-4 shadow-sm overflow-hidden">
                    <img src="<?= base_url('img/home/cataratas.jpg') ?>" 
                         alt="Paisaje de Misiones" 
                         class="card-img-top object-fit-cover" 
                         style="height: 220px;">
                    <div class="card-body p-4">
                        <span class="d-inline-block fw-bold small text-uppercase mb-2" style="color: #28744f; letter-spacing: 1px;">
                            Historia
                        </span>
                        <h3 class="h4 fw-bold mb-2" style="color: #174d3c;">Ruinas de San Ignacio</h3>
                        <p class="card-text text-secondary mb-0 small" style="line-height: 1.65;">
                            Un importante conjunto histórico de las antiguas
                            misiones jesuíticas, declarado Patrimonio Mundial de la Humanidad.
                        </p>
                    </div>
                </article>
            </div>

            <div class="col-md-6 col-lg-4">
                <article class="card h-100 border-0 rounded-4 shadow-sm overflow-hidden">
                    <img src="<?= base_url('img/home/fondo.jpg') ?>" 
                         alt="Selva misionera" 
                         class="card-img-top object-fit-cover" 
                         style="height: 220px;">
                    <div class="card-body p-4">
                        <span class="d-inline-block fw-bold small text-uppercase mb-2" style="color: #28744f; letter-spacing: 1px;">
                            Aventura
                        </span>
                        <h3 class="h4 fw-bold mb-2" style="color: #174d3c;">Saltos del Moconá</h3>
                        <p class="card-text text-secondary mb-0 small" style="line-height: 1.65;">
                            Una formación natural única donde las aguas del río
                            Uruguay caen de manera longitudinal a lo largo de una falla geológica.
                        </p>
                    </div>
                </article>
            </div>

        </div>

        <div class="rounded-4 p-4 p-md-5 mt-5 border-start border-5" style="background-color: #edf4ef; border-color: #28744f !important;">
            <h3 class="h4 fw-bold mb-2" style="font-family: Georgia, serif; color: #174d3c;">
                Una provincia para descubrir
            </h3>
            <p class="text-secondary mb-0" style="line-height: 1.7;">
                Misiones ofrece mucho más que sus atractivos más conocidos.
                Sus parques naturales, pueblos, caminos rurales y espacios
                culturales permiten descubrir diferentes paisajes y experiencias
                durante todo el año.
            </p>
        </div>

    </div>
</section>

<?php
    include(APPPATH . 'Views/template/footer.php');
?>