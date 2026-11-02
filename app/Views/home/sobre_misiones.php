<?php
    $seccion = 'actividades';
    include(APPPATH . 'Views/template/header.php');
?>

<div class="bg-light text-dark">

    <!-- hero section -->
    <section class="position-relative text-white text-center py-5 d-flex align-items-center justify-content-center" 
             style="min-height: 360px; background: linear-gradient(rgba(14, 39, 29, 0.68), rgba(14, 39, 29, 0.68)), url('<?= base_url('img/fondo2.jpg') ?>') center 45% / cover;">
        <div class="container py-4" style="max-width: 780px;">
            <span class="d-inline-block fw-bold small text-uppercase mb-3" style="color: #f2c66d; letter-spacing: 3px;">
                Identidad misionera
            </span>
            <h1 class="display-4 fw-bold mb-3" style="font-family: Georgia, serif;">Cultura y geografía</h1>
            <p class="lead mx-auto mb-0 text-light fs-5" style="max-width: 650px; line-height: 1.8;">
                Una tierra de selva, ríos y tradiciones que se encuentran.
                Descubrí el paisaje, la historia y las comunidades que
                hacen de Misiones una provincia única.
            </p>
        </div>
    </section>

    <section class="py-5">
        <div class="container py-3">

            <div class="text-center mx-auto mb-5" style="max-width: 790px;">
                <span class="d-block fw-bold small text-uppercase mb-2" style="color: #28744f; letter-spacing: 2px;">
                    El territorio
                </span>
                <h2 class="display-6 fw-bold mb-3" style="font-family: Georgia, serif; color: #174d3c;">
                    Una provincia entre ríos y selva
                </h2>
                <p class="text-secondary mb-0" style="line-height: 1.85;">
                    Ubicada en el noreste argentino, Misiones se distingue
                    por su tierra rojiza, su vegetación subtropical y sus
                    numerosos cursos de agua. Su paisaje está marcado por
                    la presencia de los ríos Paraná, Uruguay e Iguazú.
                </p>
            </div>

            <!-- tarjetas -->
            <div class="row g-4">

                <div class="col-md-6 col-lg-4">
                    <article class="card h-100 border-0 shadow-sm p-4 rounded-3 bg-white">
                        <div class="fw-bold small mb-3" style="color: #28744f; letter-spacing: 2px;">
                            01 / GEOGRAFÍA
                        </div>
                        <h3 class="h4 fw-bold mb-3" style="font-family: Georgia, serif; color: #174d3c;">
                            Selva paranaense
                        </h3>
                        <p class="text-secondary mb-0 small" style="line-height: 1.8;">
                            La selva misionera forma parte de uno de los
                            ambientes de mayor biodiversidad de la región.
                            Alberga una gran variedad de árboles, plantas,
                            aves y mamíferos, y cumple un papel fundamental
                            en la conservación del ecosistema.
                        </p>
                    </article>
                </div>

                <div class="col-md-6 col-lg-4">
                    <article class="card h-100 border-0 shadow-sm p-4 rounded-3 bg-white">
                        <div class="fw-bold small mb-3" style="color: #28744f; letter-spacing: 2px;">
                            02 / CLIMA
                        </div>
                        <h3 class="h4 fw-bold mb-3" style="font-family: Georgia, serif; color: #174d3c;">
                            Calor y humedad
                        </h3>
                        <p class="text-secondary mb-0 small" style="line-height: 1.8;">
                            El clima es subtropical, con temperaturas
                            generalmente cálidas y precipitaciones durante
                            buena parte del año. La humedad favorece el
                            desarrollo de la vegetación y el caudal de
                            saltos y arroyos.
                        </p>
                    </article>
                </div>

                <div class="col-md-6 col-lg-4">
                    <article class="card h-100 border-0 shadow-sm p-4 rounded-3 bg-white">
                        <div class="fw-bold small mb-3" style="color: #28744f; letter-spacing: 2px;">
                            03 / AGUA
                        </div>
                        <h3 class="h4 fw-bold mb-3" style="font-family: Georgia, serif; color: #174d3c;">
                            Ríos y cascadas
                        </h3>
                        <p class="text-secondary mb-0 small" style="line-height: 1.8;">
                            Los ríos y arroyos forman parte esencial del
                            paisaje provincial. Las Cataratas del Iguazú
                            son su atractivo más reconocido, aunque existen
                            otros saltos y rincones naturales para conocer.
                        </p>
                    </article>
                </div>

            </div>
        </div>
    </section>

    <section class="py-5 text-white" style="background-color: #174d3c;">
        <div class="container py-3">
            <div class="row align-items-start g-5">

                <div class="col-lg-6">
                    <span class="d-block fw-bold small text-uppercase mb-2" style="color: #f2c66d; letter-spacing: 2px;">
                        Historia y diversidad
                    </span>

                    <h2 class="display-6 fw-bold mb-3" style="font-family: Georgia, serif;">
                        Tradiciones que siguen vivas
                    </h2>

                    <p class="text-light opacity-75 mb-0" style="line-height: 1.85;">
                        La identidad misionera se construyó a partir del
                        encuentro de distintas culturas. La herencia de
                        los pueblos originarios, la historia de las
                        misiones jesuíticas y las corrientes migratorias
                        forman parte de sus costumbres, su gastronomía
                        y su vida cotidiana.
                    </p>
                </div>

                <div class="col-lg-6">

                    <div class="ps-3 mb-4 border-start border-3" style="border-color: #e6a100 !important;">
                        <h3 class="h5 fw-bold mb-2" style="font-family: Georgia, serif;">Pueblos originarios</h3>
                        <p class="text-light opacity-75 small mb-0">
                            El pueblo Mbya Guaraní mantiene una presencia
                            fundamental en la provincia, con su lengua,
                            sus conocimientos y sus formas propias de
                            relacionarse con el territorio.
                        </p>
                    </div>

                    <div class="ps-3 mb-4 border-start border-3" style="border-color: #e6a100 !important;">
                        <h3 class="h5 fw-bold mb-2" style="font-family: Georgia, serif;">Herencia jesuítica</h3>
                        <p class="text-light opacity-75 small mb-0">
                            Las reducciones jesuíticas dejaron un legado
                            histórico y arquitectónico que puede conocerse
                            en sitios como San Ignacio Miní.
                        </p>
                    </div>

                    <div class="ps-3 border-start border-3" style="border-color: #e6a100 !important;">
                        <h3 class="h5 fw-bold mb-2" style="font-family: Georgia, serif;">Una cultura diversa</h3>
                        <p class="text-light opacity-75 small mb-0">
                            Las comunidades de distintos orígenes
                            contribuyeron a las tradiciones, los sabores
                            y las celebraciones que caracterizan a Misiones.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container py-3">

            <div class="text-center mx-auto mb-5" style="max-width: 790px;">
                <span class="d-block fw-bold small text-uppercase mb-2" style="color: #28744f; letter-spacing: 2px;">
                    Para organizar tu visita
                </span>
                <h2 class="display-6 fw-bold mb-3" style="font-family: Georgia, serif; color: #174d3c;">
                    ¿Cuándo viajar a Misiones?
                </h2>
                <p class="text-secondary mb-0" style="line-height: 1.85;">
                    La provincia puede visitarse durante todo el año.
                    La mejor época depende de las actividades que quieras
                    realizar y de las condiciones del clima.
                </p>
            </div>

            <div class="row g-4">

                <div class="col-md-6">
                    <article class="card h-100 border-0 shadow-sm p-4 rounded-3 bg-white">
                        <div class="fw-bold small mb-3" style="color: #28744f; letter-spacing: 2px;">
                            PRIMAVERA Y OTOÑO
                        </div>
                        <h3 class="h4 fw-bold mb-3" style="font-family: Georgia, serif; color: #174d3c;">
                            Para recorrer con tranquilidad
                        </h3>
                        <p class="text-secondary mb-0 small" style="line-height: 1.8;">
                            Suelen ofrecer temperaturas más moderadas
                            que el verano. Son buenas estaciones para
                            caminar por senderos, visitar parques y
                            conocer sitios históricos.
                        </p>
                    </article>
                </div>

                <div class="col-md-6">
                    <article class="card h-100 border-0 shadow-sm p-4 rounded-3 bg-white">
                        <div class="fw-bold small mb-3" style="color: #28744f; letter-spacing: 2px;">
                            VERANO E INVIERNO
                        </div>
                        <h3 class="h4 fw-bold mb-3" style="font-family: Georgia, serif; color: #174d3c;">
                            Dos formas de descubrirla
                        </h3>
                        <p class="text-secondary mb-0 small" style="line-height: 1.8;">
                            El verano suele ser caluroso y húmedo, mientras
                            que el invierno presenta temperaturas más
                            frescas. Antes de salir, conviene consultar
                            el pronóstico y las condiciones de los senderos
                            y atractivos.
                        </p>
                    </article>
                </div>

            </div>
        </div>
    </section>

    <section class="py-5 px-3 text-center">
        <div class="container py-2" style="max-width: 740px;">
            <h2 class="h3 fw-bold mb-3" style="font-family: Georgia, serif; color: #174d3c;">
                Conocer Misiones es conocer su gente
            </h2>
            <p class="text-secondary mb-0" style="line-height: 1.8;">
                Más allá de sus paisajes, la provincia invita a descubrir
                historias, costumbres y formas de vida que enriquecen cada
                recorrido. Cuidar el ambiente y respetar a las comunidades
                locales también forma parte de viajar responsablemente.
            </p>
        </div>
    </section>

</div>

<?php
    include(APPPATH . 'Views/template/footer.php');
?>