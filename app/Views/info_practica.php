<?php
    $seccion = 'info_practica';
    include("template/header.php");
?>

<style>
    .guia {
        font-family: 'DM Sans', Arial, sans-serif;
        color: #29382f;
        background: #f5f7f5;
    }

    .guia h1,
    .guia h2,
    .guia h3 {
        font-family: Georgia, 'Times New Roman', serif;
    }

    .guia-hero {
        min-height: 350px;
        padding: 70px 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: white;
        background:
            linear-gradient(rgba(15, 40, 30, .72), rgba(15, 40, 30, .72)),
            url('<?= base_url('img/fondo.jpg') ?>') center / cover;
    }

    .guia-hero .contenido {
        max-width: 760px;
    }

    .guia-etiqueta {
        color: #f2c66d;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 3px;
        text-transform: uppercase;
    }

    .guia-hero h1 {
        font-size: clamp(38px, 5vw, 58px);
        line-height: 1.15;
        margin: 18px 0;
    }

    .guia-hero p {
        max-width: 650px;
        margin: 0 auto;
        color: #edf2ed;
        font-size: 17px;
        line-height: 1.8;
    }

    .guia-seccion {
        padding: 65px 0;
    }

    .guia-intro {
        max-width: 780px;
        margin: 0 auto 38px;
        text-align: center;
    }

    .guia-intro .subtitulo {
        color: #28744f;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 2px;
        text-transform: uppercase;
    }

    .guia-intro h2 {
        font-size: clamp(30px, 4vw, 42px);
        margin: 12px 0 16px;
    }

    .guia-intro p {
        color: #68736b;
        line-height: 1.85;
        margin-bottom: 0;
    }

    .guia-tarjeta {
        height: 100%;
        padding: 29px;
        background: #fff;
        border: 1px solid #e2e8e2;
        border-radius: 12px;
        transition: transform .2s ease, box-shadow .2s ease;
    }

    .guia-tarjeta:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(24, 55, 38, .07);
    }

    .guia-numero {
        color: #28744f;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 2px;
        margin-bottom: 15px;
    }

    .guia-tarjeta h3 {
        font-size: 24px;
        margin-bottom: 14px;
    }

    .guia-tarjeta p,
    .guia-tarjeta li {
        color: #68736b;
        font-size: 15px;
        line-height: 1.8;
    }

    .guia-tarjeta ul {
        padding-left: 19px;
        margin-bottom: 0;
    }

    .guia-tarjeta li {
        padding-left: 3px;
        margin-bottom: 7px;
    }

    .guia-destacado {
        background: #174d3c;
        color: white;
        padding: 55px 0;
    }

    .guia-destacado h2 {
        font-size: clamp(28px, 4vw, 38px);
        margin-bottom: 18px;
    }

    .guia-destacado p {
        color: #e0e9e2;
        line-height: 1.85;
    }

    .guia-consejo {
        border-left: 2px solid #e6a100;
        padding-left: 19px;
        margin-bottom: 24px;
    }

    .guia-consejo h3 {
        font-size: 21px;
        margin-bottom: 8px;
    }

    .guia-consejo p {
        font-size: 15px;
        margin-bottom: 0;
    }

    .guia-enlace {
        display: inline-block;
        margin-top: 10px;
        padding: 10px 17px;
        border: 1px solid #d6e1d8;
        border-radius: 6px;
        color: #174d3c;
        text-decoration: none;
        font-size: 14px;
        font-weight: 700;
        transition: background .2s ease, color .2s ease;
    }

    .guia-enlace:hover {
        background: #174d3c;
        color: white;
    }

    .guia-cierre {
        padding: 55px 20px;
        text-align: center;
    }

    .guia-cierre h2 {
        font-size: 32px;
        margin-bottom: 15px;
    }

    .guia-cierre p {
        max-width: 700px;
        margin: 0 auto;
        color: #68736b;
        line-height: 1.8;
    }

    @media (max-width: 768px) {
        .guia-hero {
            min-height: 310px;
            padding: 50px 20px;
        }

        .guia-seccion {
            padding: 45px 0;
        }

        .guia-tarjeta {
            padding: 24px;
        }
    }
</style>

<div class="guia">

    <section class="guia-hero">
        <div class="contenido">
            <span class="guia-etiqueta">Prepará tu recorrido</span>
            <h1>Guía al viajero</h1>
            <p>
                Todo lo que necesitás saber antes de viajar a Misiones:
                transporte, alojamiento, clima y recomendaciones para
                disfrutar cada lugar con tranquilidad.
            </p>
        </div>
    </section>

    <section class="guia-seccion">
        <div class="container">

            <div class="guia-intro">
                <span class="subtitulo">Antes de salir</span>
                <h2>Organizá tu viaje</h2>
                <p>
                    Planificar algunos detalles con anticipación te
                    permite aprovechar mejor el tiempo y recorrer la
                    provincia según tus intereses.
                </p>
            </div>

            <div class="row g-4">

                <div class="col-md-6 col-lg-4">
                    <article class="guia-tarjeta">
                        <div class="guia-numero">01 / TRANSPORTE</div>
                        <h3>Cómo llegar</h3>
                        <p>
                            Se puede llegar a Misiones por vía terrestre
                            o aérea. Posadas es la capital provincial y
                            Puerto Iguazú es uno de los principales puntos
                            de acceso para visitar las Cataratas.
                        </p>
                        <ul>
                            <li>Ómnibus de larga distancia.</li>
                            <li>Avión hacia Posadas o Puerto Iguazú.</li>
                            <li>Automóvil por las rutas de acceso.</li>
                        </ul>
                    </article>
                </div>

                <div class="col-md-6 col-lg-4">
                    <article class="guia-tarjeta">
                        <div class="guia-numero">02 / MOVILIDAD</div>
                        <h3>Cómo recorrer</h3>
                        <p>
                            Las distancias entre algunos atractivos pueden
                            ser importantes. Conviene organizar los
                            recorridos por zonas y revisar los horarios
                            del transporte antes de salir.
                        </p>
                        <ul>
                            <li>Colectivos urbanos e interurbanos.</li>
                            <li>Excursiones y traslados turísticos.</li>
                            <li>Alquiler de vehículos según el itinerario.</li>
                        </ul>
                    </article>
                </div>

                <div class="col-md-6 col-lg-4">
                    <article class="guia-tarjeta">
                        <div class="guia-numero">03 / ALOJAMIENTO</div>
                        <h3>Dónde hospedarse</h3>
                        <p>
                            La provincia cuenta con hoteles, hosterías,
                            cabañas, hostels y alojamientos rurales.
                            La elección depende del presupuesto y de
                            los lugares que quieras visitar.
                        </p>
                        <ul>
                            <li>Posadas, para recorrer la capital.</li>
                            <li>Puerto Iguazú, para visitar las Cataratas.</li>
                            <li>Localidades cercanas a parques y saltos.</li>
                        </ul>
                    </article>
                </div>

            </div>
        </div>
    </section>

    <section class="guia-destacado">
        <div class="container">
            <div class="row g-5">

                <div class="col-lg-5">
                    <span class="guia-etiqueta">Viajá preparado</span>
                    <h2>Consejos para disfrutar Misiones</h2>
                    <p>
                        El clima, la vegetación y las distancias pueden
                        cambiar bastante entre un recorrido y otro.
                        Tener en cuenta algunos detalles ayuda a viajar
                        con mayor comodidad y cuidar el entorno natural.
                    </p>
                </div>

                <div class="col-lg-7">

                    <div class="guia-consejo">
                        <h3>Ropa y protección</h3>
                        <p>
                            Llevá ropa cómoda, calzado adecuado para
                            caminar, protector solar y repelente de
                            insectos. Un impermeable liviano puede
                            resultar útil por las lluvias.
                        </p>
                    </div>

                    <div class="guia-consejo">
                        <h3>Reservas y horarios</h3>
                        <p>
                            En temporada alta, reservá alojamiento y
                            excursiones con anticipación. Verificá los
                            horarios, tarifas y condiciones de acceso
                            directamente con cada prestador.
                        </p>
                    </div>

                    <div class="guia-consejo">
                        <h3>Cuidado del ambiente</h3>
                        <p>
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

    <section class="guia-seccion">
        <div class="container">

            <div class="guia-intro">
                <span class="subtitulo">Información útil</span>
                <h2>Consultá fuentes oficiales</h2>
                <p>
                    Antes de viajar, verificá la información actualizada
                    sobre accesos, tarifas, clima y servicios. Los datos
                    pueden cambiar según la temporada.
                </p>
            </div>

            <div class="row g-4">

                <div class="col-md-6">
                    <article class="guia-tarjeta">
                        <div class="guia-numero">PARQUES NACIONALES</div>
                        <h3>Parque Nacional Iguazú</h3>
                        <p>
                            Consultá información oficial sobre senderos,
                            horarios de ingreso, servicios disponibles
                            y condiciones para visitar las Cataratas.
                        </p>
                        <a class="guia-enlace"
                           href="https://www.argentina.gob.ar/parquesnacionales"
                           target="_blank"
                           rel="noopener noreferrer">
                            Sitio de Parques Nacionales
                        </a>
                    </article>
                </div>

                <div class="col-md-6">
                    <article class="guia-tarjeta">
                        <div class="guia-numero">TURISMO PROVINCIAL</div>
                        <h3>Información de Misiones</h3>
                        <p>
                            Para conocer destinos, actividades y propuestas
                            turísticas, consultá los canales oficiales de
                            turismo de la provincia.
                        </p>
                        <a class="guia-enlace"
                           href="https://misiones.tur.ar/"
                           target="_blank"
                           rel="noopener noreferrer">
                            Turismo Misiones
                        </a>
                    </article>
                </div>

            </div>
        </div>
    </section>

    <section class="guia-cierre">
        <h2>Un viaje que empieza con una buena planificación</h2>
        <p>
            Organizá tus traslados, respetá los espacios naturales y
            dedicá tiempo a conocer las costumbres locales. Misiones
            tiene mucho más para ofrecer que un solo destino.
        </p>
    </section>

</div>

<?php
    include("template/footer.php");
?>