<?php
    $seccion = 'experiencias';
    include(APPPATH . 'Views/template/header.php');
?>

<div class="bg-light text-dark">

    <!-- PORTADA / HERO -->
    <section class="position-relative d-flex align-items-center text-white py-5" 
             style="min-height: 440px; background: linear-gradient(90deg, rgba(13, 37, 28, .88), rgba(13, 37, 28, .32)), url('<?= base_url('img/home/fondo2.jpg') ?>') center 48% / cover; padding: 75px 8%;">
        <div class="container-fluid p-0">
            <div style="max-width: 680px;">
                <div class="text-uppercase fw-bold mb-3" style="letter-spacing: 3px; font-size: 12px; color: #e8bd73;">
                    Sabores, naturaleza y aventura
                </div>

                <h1 class="fw-bold mb-3" style="font-family: 'Playfair Display', Georgia, serif; font-size: clamp(38px, 5vw, 60px); line-height: 1.12;">
                    Viví Misiones de una manera diferente
                </h1>

                <p class="mb-4" style="font-size: 17px; line-height: 1.8; color: #f0f3ef; max-width: 590px;">
                    Descubrí los sabores de la región, recorré senderos rodeados
                    de selva y encontrá nuevas formas de disfrutar una provincia
                    donde la naturaleza y la cultura se encuentran.
                </p>

                <a href="#gastronomia" class="btn text-white fw-bold px-4 py-3 border-0 rounded-2" style="background: #d18b43; transition: background .2s;">
                    Descubrir experiencias
                </a>
            </div>
        </div>
    </section>

    <!-- GASTRONOMÍA -->
    <section class="container py-5" id="gastronomia" style="max-width: 1200px; padding-top: 70px; padding-bottom: 70px;">
        <div class="text-center mx-auto mb-5" style="max-width: 720px;">
            <span class="text-uppercase fw-bold" style="color: #39815a; letter-spacing: 2px; font-size: 12px;">
                Identidad regional
            </span>
            <h2 class="fw-bold my-2" style="font-family: 'Playfair Display', Georgia, serif; font-size: clamp(30px, 4vw, 42px); color: #174d3c;">
                Los sabores de Misiones
            </h2>
            <p class="mb-0" style="color: #66736a; line-height: 1.8;">
                La cocina misionera reúne tradiciones guaraníes y aportes
                de distintas comunidades. Sus recetas aprovechan ingredientes
                regionales y forman parte de la identidad de la provincia.
            </p>
        </div>

        <div class="row g-4">

            <!-- Card 1 -->
            <div class="col-12 col-md-4">
                <div class="card h-100 border rounded-3 overflow-hidden shadow-sm" style="background: #fff; border-color: #e4e9e4 !important;">
                    <div class="p-4 d-flex align-items-end text-white" style="min-height: 165px; background: linear-gradient(135deg, #174d3c, #47815c);">
                        <h3 class="m-0" style="font-family: 'Playfair Display', Georgia, serif; font-size: 28px;">Chipá</h3>
                    </div>
                    <div class="card-body p-4 d-flex flex-column justify-content-between">
                        <p class="m-0 mb-3" style="color: #647168; line-height: 1.8;">
                            Un clásico de la región elaborado principalmente
                            con almidón de mandioca y queso. Es habitual
                            encontrarlo en panaderías, ferias y puestos locales.
                        </p>
                        <div>
                            <span class="badge fw-bold px-3 py-2 rounded-1" style="background: #edf4ed; color: #28744f; font-size: 12px;">
                                Tradición regional
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-12 col-md-4">
                <div class="card h-100 border rounded-3 overflow-hidden shadow-sm" style="background: #fff; border-color: #e4e9e4 !important;">
                    <div class="p-4 d-flex align-items-end text-white" style="min-height: 165px; background: linear-gradient(135deg, #9b6736, #d1a16b);">
                        <h3 class="m-0" style="font-family: 'Playfair Display', Georgia, serif; font-size: 28px;">Reviro</h3>
                    </div>
                    <div class="card-body p-4 d-flex flex-column justify-content-between">
                        <p class="m-0 mb-3" style="color: #647168; line-height: 1.8;">
                            Preparación sencilla a base de harina, agua, sal
                            y aceite. Está muy presente en la vida cotidiana
                            de la región y suele acompañarse con mate cocido.
                        </p>
                        <div>
                            <span class="badge fw-bold px-3 py-2 rounded-1" style="background: #edf4ed; color: #28744f; font-size: 12px;">
                                Cocina casera
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-12 col-md-4">
                <div class="card h-100 border rounded-3 overflow-hidden shadow-sm" style="background: #fff; border-color: #e4e9e4 !important;">
                    <div class="p-4 d-flex align-items-end text-white" style="min-height: 165px; background: linear-gradient(135deg, #435b36, #83975e);">
                        <h3 class="m-0" style="font-family: 'Playfair Display', Georgia, serif; font-size: 28px;">Yerba mate</h3>
                    </div>
                    <div class="card-body p-4 d-flex flex-column justify-content-between">
                        <p class="m-0 mb-3" style="color: #647168; line-height: 1.8;">
                            Misiones es una de las principales provincias
                            productoras de yerba mate del país. Conocer su
                            cultivo y elaboración permite acercarse a una
                            tradición profundamente argentina.
                        </p>
                        <div>
                            <span class="badge fw-bold px-3 py-2 rounded-1" style="background: #edf4ed; color: #28744f; font-size: 12px;">
                                Producción local
                            </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="mt-4 p-4 rounded-1" style="border-left: 4px solid #d18b43; background: #fff; color: #59665d; line-height: 1.8;">
            <strong style="color: #174d3c;">Para tener en cuenta:</strong>
            en ferias y mercados regionales también podés encontrar
            productos elaborados con mandioca, dulces, mieles y otros
            alimentos de productores locales.
        </div>
    </section>

    <!-- AVENTURA -->
    <section style="background: #eaf0e9; padding: 70px 25px;">
        <div class="container p-0" style="max-width: 1200px;">
            <div class="text-center mx-auto mb-5" style="max-width: 720px;">
                <span class="text-uppercase fw-bold" style="color: #39815a; letter-spacing: 2px; font-size: 12px;">
                    Para los que quieren explorar
                </span>
                <h2 class="fw-bold my-2" style="font-family: 'Playfair Display', Georgia, serif; font-size: clamp(30px, 4vw, 42px); color: #174d3c;">
                    Aventura en plena naturaleza
                </h2>
                <p class="mb-0" style="color: #66736a; line-height: 1.8;">
                    La selva, los ríos y los saltos de agua ofrecen distintas
                    alternativas para quienes buscan movimiento, paisajes
                    y contacto con el entorno natural.
                </p>
            </div>

            <div class="row g-4">

                <div class="col-12 col-md-4">
                    <div class="card h-100 border rounded-3 overflow-hidden shadow-sm" style="background: #fff; border-color: #e4e9e4 !important;">
                        <div class="p-4 d-flex align-items-end text-white" style="min-height: 165px; background: linear-gradient(135deg, #244d3b, #648c67);">
                            <h3 class="m-0" style="font-family: 'Playfair Display', Georgia, serif; font-size: 28px;">Senderismo</h3>
                        </div>
                        <div class="card-body p-4 d-flex flex-column justify-content-between">
                            <div>
                                <p class="m-0" style="color: #647168; line-height: 1.8;">
                                    Caminá por senderos naturales, observá la
                                    vegetación de la selva paranaense y descubrí
                                    la diversidad de aves y otras especies de la zona.
                                </p>
                                <h4 class="fw-bold mt-4 mb-2" style="font-size: 15px; color: #174d3c;">Ideal para</h4>
                                <p class="m-0" style="color: #647168; line-height: 1.8;">
                                    Amantes de la naturaleza, la fotografía
                                    y los paseos al aire libre.
                                </p>
                            </div>
                            <div class="mt-3">
                                <span class="badge fw-bold px-3 py-2 rounded-1" style="background: #edf4ed; color: #28744f; font-size: 12px;">
                                    Naturaleza
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="card h-100 border rounded-3 overflow-hidden shadow-sm" style="background: #fff; border-color: #e4e9e4 !important;">
                        <div class="p-4 d-flex align-items-end text-white" style="min-height: 165px; background: linear-gradient(135deg, #315d70, #719da7);">
                            <h3 class="m-0" style="font-family: 'Playfair Display', Georgia, serif; font-size: 28px;">Kayak y ríos</h3>
                        </div>
                        <div class="card-body p-4 d-flex flex-column justify-content-between">
                            <div>
                                <p class="m-0" style="color: #647168; line-height: 1.8;">
                                    En los lugares habilitados, las actividades
                                    náuticas permiten conocer el paisaje desde
                                    otra perspectiva y disfrutar de los cursos de agua.
                                </p>
                                <h4 class="fw-bold mt-4 mb-2" style="font-size: 15px; color: #174d3c;">Ideal para</h4>
                                <p class="m-0" style="color: #647168; line-height: 1.8;">
                                    Quienes buscan una experiencia diferente
                                    y disfrutan de las actividades acuáticas.
                                </p>
                            </div>
                            <div class="mt-3">
                                <span class="badge fw-bold px-3 py-2 rounded-1" style="background: #edf4ed; color: #28744f; font-size: 12px;">
                                    Aventura acuática
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="card h-100 border rounded-3 overflow-hidden shadow-sm" style="background: #fff; border-color: #e4e9e4 !important;">
                        <div class="p-4 d-flex align-items-end text-white" style="min-height: 165px; background: linear-gradient(135deg, #7a572d, #c19a5c);">
                            <h3 class="m-0" style="font-family: 'Playfair Display', Georgia, serif; font-size: 28px;">Saltos y cascadas</h3>
                        </div>
                        <div class="card-body p-4 d-flex flex-column justify-content-between">
                            <div>
                                <p class="m-0" style="color: #647168; line-height: 1.8;">
                                    Los saltos de agua y los espacios naturales
                                    invitan a recorrer miradores, hacer caminatas
                                    y disfrutar de paisajes únicos de la provincia.
                                </p>
                                <h4 class="fw-bold mt-4 mb-2" style="font-size: 15px; color: #174d3c;">Ideal para</h4>
                                <p class="m-0" style="color: #647168; line-height: 1.8;">
                                    Escapadas en familia, paseos tranquilos
                                    y excursiones fotográficas.
                                </p>
                            </div>
                            <div class="mt-3">
                                <span class="badge fw-bold px-3 py-2 rounded-1" style="background: #edf4ed; color: #28744f; font-size: 12px;">
                                    Paisajes naturales
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="mt-4 p-4 rounded-1" style="border-left: 4px solid #d18b43; background: #fff; color: #59665d; line-height: 1.8;">
                <strong style="color: #174d3c;">Importante:</strong>
                las actividades disponibles dependen del lugar, la temporada
                y las condiciones climáticas. Antes de salir, consultá
                los accesos habilitados y las indicaciones de los guías.
            </div>
        </div>
    </section>

    <!-- IDEAS PARA ORGANIZAR EL VIAJE -->
    <section class="container py-5" style="max-width: 1200px; padding-top: 70px; padding-bottom: 70px;">
        <div class="text-center mx-auto mb-5" style="max-width: 720px;">
            <span class="text-uppercase fw-bold" style="color: #39815a; letter-spacing: 2px; font-size: 12px;">
                Organizá tu recorrido
            </span>
            <h2 class="fw-bold my-2" style="font-family: 'Playfair Display', Georgia, serif; font-size: clamp(30px, 4vw, 42px); color: #174d3c;">
                ¿Qué tipo de experiencia buscás?
            </h2>
            <p class="mb-0" style="color: #66736a; line-height: 1.8;">
                Podés combinar distintas propuestas según el tiempo que
                tengas disponible y el tipo de viaje que quieras hacer.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-12 col-md-6">
                <div class="p-4 border rounded-3 bg-white" style="border-color: #e4e9e4 !important;">
                    <h3 class="mb-3" style="font-family: 'Playfair Display', Georgia, serif; color: #174d3c; font-size: 25px;">Una escapada tranquila</h3>
                    <p class="m-0" style="color: #647168; line-height: 1.8;">
                        Recorré atractivos naturales durante el día, conocé
                        la gastronomía regional y reservá tiempo para visitar
                        ferias, espacios culturales y emprendimientos locales.
                    </p>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="p-4 border rounded-3 bg-white" style="border-color: #e4e9e4 !important;">
                    <h3 class="mb-3" style="font-family: 'Playfair Display', Georgia, serif; color: #174d3c; font-size: 25px;">Un viaje de aventura</h3>
                    <p class="m-0" style="color: #647168; line-height: 1.8;">
                        Organizá caminatas y excursiones, explorá los paisajes
                        de la provincia y consultá opciones de actividades
                        guiadas para aprovechar cada salida de forma segura.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CIERRE -->
    <section class="text-center text-white py-5" style="background: #174d3c; padding-top: 58px; padding-bottom: 58px;">
        <div class="container px-4">
            <h2 class="mb-3" style="font-family: 'Playfair Display', Georgia, serif; font-size: clamp(28px, 4vw, 38px);">Misiones tiene mucho para ofrecer</h2>
            <p class="m-0 mx-auto" style="max-width: 650px; color: #e0e9e1; line-height: 1.8;">
                Desde una comida típica hasta una caminata por la selva,
                cada experiencia es una oportunidad para conocer mejor
                la provincia y llevarte un recuerdo diferente.
            </p>
        </div>
    </section>

</div>

<?php
    include(APPPATH . 'Views/template/footer.php');
?>