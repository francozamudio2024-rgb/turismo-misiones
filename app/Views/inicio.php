<?php
    include("template/header.php");
?>

    <!-- HERO -->
    <section class="hero-section d-flex align-items-center justify-content-center text-center text-white px-3">
        <div class="container" style="max-width: 760px;">
            <h2 class="display-4 fw-bold mb-3">Descubrí Misiones</h2>
            <p class="fs-5 mb-4 leading-relaxed">
                Conocé los paisajes, lugares y experiencias que hacen de Misiones un destino único.
            </p>
            <a href="<?= base_url('actividades') ?>" class="btn btn-naranja btn-lg fw-bold px-4 py-2">
                Ver actividades
            </a>
        </div>
    </section>

    <!-- INFORMACIÓN GENERAL -->
    <section class="container py-5 text-center">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="text-verde-misiones fw-bold mb-3">Viví una experiencia diferente</h2>
                <p class="text-muted fs-5 leading-relaxed">
                    Encontrá actividades turísticas, lugares para visitar y experiencias para disfrutar en distintos puntos de la provincia de Misiones.
                </p>
            </div>
        </div>
    </section>

    <!-- BLOQUES DE TARJETAS -->
    <section class="container mb-5">
        <div class="row g-4">
            
            <div class="col-md-4">
                <div class="card h-100 border-light-subtle shadow-sm text-center p-3">
                    <div class="card-body">
                        <h3 class="h4 text-verde-misiones fw-bold card-title mb-3">Destinos</h3>
                        <p class="card-text text-secondary">
                            Conocé algunos de los lugares más destacados de la provincia de Misiones.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-light-subtle shadow-sm text-center p-3">
                    <div class="card-body">
                        <h3 class="h4 text-verde-misiones fw-bold card-title mb-3">Actividades</h3>
                        <p class="card-text text-secondary">
                            Explorá diferentes propuestas y experiencias disponibles para los visitantes.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-light-subtle shadow-sm text-center p-3">
                    <div class="card-body">
                        <h3 class="h4 text-verde-misiones fw-bold card-title mb-3">Reservas</h3>
                        <p class="card-text text-secondary">
                            Consultá las actividades disponibles y realizá una reserva de forma sencilla.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-light-subtle shadow-sm text-center p-3">
                    <div class="card-body">
                        <h3 class="h4 text-verde-misiones fw-bold card-title mb-3">Alojamientos</h3>
                        <p class="card-text text-secondary">
                            Encontrá hoteles, cabañas y hospedajes para disfrutar tu estadía en Misiones.
                        </p>
                        <a href="<?= site_url('alojamientos') ?>" class="btn btn-naranja fw-bold mt-2">
                            Ver alojamientos
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
    include("template/footer.php");
?>