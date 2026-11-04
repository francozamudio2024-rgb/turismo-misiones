<?php
    $seccion = 'actividades';
    include(APPPATH . 'Views/template/header.php');
?>

<div class="bg-light text-dark">

    <!-- hero section -->
    <section class="position-relative text-white text-center py-5 d-flex align-items-center justify-content-center" 
             style="min-height: 350px; background: linear-gradient(rgba(15, 40, 30, 0.72), rgba(15, 40, 30, 0.72)), url('<?= base_url('img/home/fondo.jpg') ?>') center / cover;">
        <div class="container py-4" style="max-width: 760px;">
            <span class="d-inline-block fw-bold small text-uppercase mb-3" style="color: #f2c66d; letter-spacing: 3px;">
                Prepará tu recorrido
            </span>
            <h1 class="display-4 fw-bold mb-3" style="font-family: Georgia, serif;">Guía al viajero</h1>
            <p class="lead mx-auto mb-0 text-light fs-5" style="max-width: 650px; line-height: 1.8;">
                Todo lo que necesitás saber antes de viajar a Misiones:
                transporte, alojamiento, clima y recomendaciones para
                disfrutar cada lugar con tranquilidad.
            </p>
        </div>
    </section>

    <section class="py-5">
        <div class="container py-3">

            <div class="text-center mx-auto mb-5" style="max-width: 780px;">
                <span class="d-block fw-bold small text-uppercase mb-2" style="color: #28744f; letter-spacing: 2px;">
                    Antes de salir
                </span>
                <h2 class="display-6 fw-bold mb-3" style="font-family: Georgia, serif; color: #174d3c;">
                    Organizá tu viaje
                </h2>
                <p class="text-secondary mb-0" style="line-height: 1.85;">
                    Planificar algunos detalles con anticipación te
                    permite aprovechar mejor el tiempo y recorrer la
                    provincia según tus intereses.
                </p>
            </div>

            <!-- tarjetas -->
            <div class="row g-4">

                <div class="col-md-6 col-lg-4">
                    <article class="card h-100 border-0 shadow-sm p-4 rounded-3 bg-white">
                        <div class="fw-bold small mb-3" style="color: #28744f; letter-spacing: 2px;">
                            01 / TRANSPORTE
                        </div>
                        <h3 class="h4 fw-bold mb-3" style="font-family: Georgia, serif; color: #174d3c;">
                            Cómo llegar
                        </h3>
                        <p class="text-secondary small mb-3" style="line-height: 1.8;">
                            Se puede llegar a Misiones por vía terrestre
                            o aérea. Posadas es la capital provincial y
                            Puerto Iguazú es uno de los principales puntos
                            de acceso para visitar las Cataratas.
                        </p>
                        <ul class="text-secondary small mb-0 ps-3" style="line-height: 1.8;">
                            <li>Ómnibus de larga distancia.</li>
                            <li>Avión hacia Posadas o Puerto Iguazú.</li>
                            <li>Automóvil por las rutas de acceso.</li>
                        </ul>
                    </article>
                </div>

                <div class="col-md-6 col-lg-4">
                    <article class="card h-100 border-0 shadow-sm p-4 rounded-3 bg-white">
                        <div class="fw-bold small mb-3" style="color: #28744f; letter-spacing: 2px;">
                            02 / MOVILIDAD
                        </div>
                        <h3 class="h4 fw-bold mb-3" style="font-family: Georgia, serif; color: #174d3c;">
                            Cómo recorrer
                        </h3>
                        <p class="text-secondary small mb-3" style="line-height: 1.8;">
                            Las distancias entre algunos atractivos pueden
                            ser importantes. Conviene organizar los
                            recorridos por zonas y revisar los horarios
                            del transporte antes de salir.
                        </p>
                        <ul class="text-secondary small mb-0 ps-3" style="line-height: 1.8;">
                            <li>Colectivos urbanos e interurbanos.</li>
                            <li>Excursiones y traslados turísticos.</li>
                            <li>Alquiler de vehículos según el itinerario.</li>
                        </ul>
                    </article>
                </div>

                <div class="col-md-6 col-lg-4">
                    <article class="card h-100 border-0 shadow-sm p-4 rounded-3 bg-white">
                        <div class="fw-bold small mb-3" style="color: #28744f; letter-spacing: 2px;">
                            03 / ALOJAMIENTO
                        </div>
                        <h3 class="h4 fw-bold mb-3" style="font-family: Georgia, serif; color: #174d3c;">
                            Dónde hospedarse
                        </h3>
                        <p class="text-secondary small mb-3" style="line-height: 1.8;">
                            La provincia cuenta con hoteles, hosterías,
                            cabañas, hostels y alojamientos rurales.
                            La elección depende del presupuesto y de
                            los lugares que quieras visitar.
                        </p>
                        <ul class="text-secondary small mb-0 ps-3" style="line-height: 1.8;">
                            <li>Posadas, para recorrer la capital.</li>
                            <li>Puerto Iguazú, para visitar las Cataratas.</li>
                            <li>Localidades cercanas a parques y saltos.</li>
                        </ul>
                    </article>
                </div>

            </div>
        </div>
    </section>

    <section class="py-5 text-white" style="background-color: #174d3c;">
        <div class="container py-3">
            <div class="row g-5">

                <div class="col-lg-5">
                    <span class="d-block fw-bold small text-uppercase mb-2" style="color: #f2c66d; letter-spacing: 3px;">
                        Viajá preparado
                    </span>

                    <h2 class="display-6 fw-bold mb-3" style="font-family: Georgia, serif;">
                        Consejos para disfrutar Misiones
                    </h2>

                    <p class="text-light opacity-75 mb-0" style="line-height: 1.85;">
                        El clima, la vegetación y las distancias pueden
                        cambiar bastante entre un recorrido y otro.
                        Tener en cuenta algunos detalles ayuda a viajar
                        con mayor comodidad y cuidar el entorno natural.
                    </p>
                </div>

                <div class="col-lg-7">

                    <div class="ps-3 mb-4 border-start border-3" style="border-color: #e6a100 !important;">
                        <h3 class="h5 fw-bold mb-2" style="font-family: Georgia, serif;">Ropa y protección</h3>
                        <p class="text-light opacity-75 small mb-0" style="line-height: 1.8;">
                            Llevá ropa cómoda, calzado adecuado para
                            caminar, protector solar y repelente de
                            insectos. Un impermeable liviano puede
                            resultar útil por las lluvias.
                        </p>
                    </div>

                    <div class="ps-3 mb-4 border-start border-3" style="border-color: #e6a100 !important;">
                        <h3 class="h5 fw-bold mb-2" style="font-family: Georgia, serif;">Reservas y horarios</h3>
                        <p class="text-light opacity-75 small mb-0" style="line-height: 1.8;">
                            En temporada alta, reservá alojamiento y
                            excursiones con anticipación. Verificá los
                            horarios, tarifas y condiciones de acceso
                            directamente con cada prestador.
                        </p>
                    </div>

                    <div class="ps-3 border-start border-3" style="border-color: #e6a100 !important;">
                        <h3 class="h5 fw-bold mb-2" style="font-family: Georgia, serif;">Cuidado del ambiente</h3>
                        <p class="text-light opacity-75 small mb-0" style="line-height: 1.8;">
                            Respetá los senderos señalizados, no alimentes
                            a los animales silvestres y llevate tus
                            residuos. Seguí siempre las indicaciones
                            de los guardaparques.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container py-3">

            <div class="text-center mx-auto mb-5" style="max-width: 780px;">
                <span class="d-block fw-bold small text-uppercase mb-2" style="color: #28744f; letter-spacing: 2px;">
                    Información útil
                </span>
                <h2 class="display-6 fw-bold mb-3" style="font-family: Georgia, serif; color: #174d3c;">
                    Consultá fuentes oficiales
                </h2>
                <p class="text-secondary mb-0" style="line-height: 1.85;">
                    Antes de viajar, verificá la información actualizada
                    sobre accesos, tarifas, clima y servicios. Los datos
                    pueden cambiar según la temporada.
                </p>
            </div>

            <div class="row g-4">

                <div class="col-md-6">
                    <article class="card h-100 border-0 shadow-sm p-4 rounded-3 bg-white">
                        <div class="fw-bold small mb-3" style="color: #28744f; letter-spacing: 2px;">
                            PARQUES NACIONALES
                        </div>
                        <h3 class="h4 fw-bold mb-3" style="font-family: Georgia, serif; color: #174d3c;">
                            Parque Nacional Iguazú
                        </h3>
                        <p class="text-secondary small mb-4" style="line-height: 1.8;">
                            Consultá información oficial sobre senderos,
                            horarios de ingreso, servicios disponibles
                            y condiciones para visitar las Cataratas.
                        </p>
                        <div>
                            <a class="btn btn-outline-success fw-bold btn-sm px-3 py-2"
                               style="color: #174d3c; border-color: #d6e1d8;"
                               href="https://www.argentina.gob.ar/parquesnacionales"
                               target="_blank"
                               rel="noopener noreferrer">
                                Sitio de Parques Nacionales
                            </a>
                        </div>
                    </article>
                </div>

                <div class="col-md-6">
                    <article class="card h-100 border-0 shadow-sm p-4 rounded-3 bg-white">
                        <div class="fw-bold small mb-3" style="color: #28744f; letter-spacing: 2px;">
                            TURISMO PROVINCIAL
                        </div>
                        <h3 class="h4 fw-bold mb-3" style="font-family: Georgia, serif; color: #174d3c;">
                            Información de Misiones
                        </h3>
                        <p class="text-secondary small mb-4" style="line-height: 1.8;">
                            Para conocer destinos, actividades y propuestas
                            turísticas, consultá los canales oficiales de
                            turismo de la provincia.
                        </p>
                        <div>
                            <a class="btn btn-outline-success fw-bold btn-sm px-3 py-2"
                               style="color: #174d3c; border-color: #d6e1d8;"
                               href="https://misiones.tur.ar/"
                               target="_blank"
                               rel="noopener noreferrer">
                                Turismo Misiones
                            </a>
                        </div>
                    </article>
                </div>

            </div>
        </div>
    </section>

    <section class="py-5 px-3 text-center">
        <div class="container py-2" style="max-width: 700px;">
            <h2 class="h3 fw-bold mb-3" style="font-family: Georgia, serif; color: #174d3c;">
                Un viaje que empieza con una buena planificación
            </h2>
            <p class="text-secondary mb-0" style="line-height: 1.8;">
                Organizá tus traslados, respetá los espacios naturales y
                dedicá tiempo a conocer las costumbres locales. Misiones
                tiene mucho más para ofrecer que un solo destino.
            </p>
        </div>
    </section>

</div>

<?php
    include(APPPATH . 'Views/template/footer.php');
?>