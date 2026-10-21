<?php
    $seccion = 'experiencias';
    include("template/header.php");
?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap');

    .experiencias {
        font-family: 'DM Sans', sans-serif;
        color: #26352d;
        background: #f5f7f5;
    }

    .experiencias h1,
    .experiencias h2,
    .experiencias h3 {
        font-family: 'Playfair Display', Georgia, serif;
    }

    .exp-hero {
        min-height: 440px;
        display: flex;
        align-items: center;
        background:
            linear-gradient(90deg, rgba(13, 37, 28, .88), rgba(13, 37, 28, .32)),
            url('<?= base_url('img/fondo2.jpg') ?>') center 48% / cover;
        color: white;
        padding: 75px 8%;
    }

    .exp-hero-content {
        max-width: 680px;
    }

    .exp-eyebrow {
        text-transform: uppercase;
        letter-spacing: 3px;
        font-size: 12px;
        font-weight: 700;
        color: #e8bd73;
        margin-bottom: 18px;
    }

    .exp-hero h1 {
        font-size: clamp(38px, 5vw, 60px);
        line-height: 1.12;
        margin-bottom: 22px;
    }

    .exp-hero p {
        font-size: 17px;
        line-height: 1.8;
        max-width: 590px;
        color: #f0f3ef;
    }

    .exp-button {
        display: inline-block;
        margin-top: 18px;
        padding: 13px 23px;
        background: #d18b43;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        font-weight: 700;
        transition: background .2s;
    }

    .exp-button:hover {
        background: #b87330;
        color: #fff;
    }

    .exp-section {
        max-width: 1200px;
        margin: auto;
        padding: 70px 25px;
    }

    .exp-section-heading {
        max-width: 720px;
        margin: 0 auto 38px;
        text-align: center;
    }

    .exp-section-heading span {
        color: #39815a;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-size: 12px;
        font-weight: 700;
    }

    .exp-section-heading h2 {
        font-size: clamp(30px, 4vw, 42px);
        margin: 12px 0;
        color: #174d3c;
    }

    .exp-section-heading p {
        color: #66736a;
        line-height: 1.8;
        margin-bottom: 0;
    }

    .exp-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 25px;
    }

    .exp-card {
        background: #fff;
        border: 1px solid #e4e9e4;
        border-radius: 9px;
        overflow: hidden;
        transition: transform .2s, box-shadow .2s;
    }

    .exp-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 28px rgba(25, 55, 39, .09);
    }

    .exp-card-top {
        min-height: 165px;
        padding: 25px;
        display: flex;
        align-items: flex-end;
        background: linear-gradient(135deg, #174d3c, #47815c);
        color: #fff;
    }

    .exp-card:nth-child(2) .exp-card-top {
        background: linear-gradient(135deg, #9b6736, #d1a16b);
    }

    .exp-card:nth-child(3) .exp-card-top {
        background: linear-gradient(135deg, #435b36, #83975e);
    }

    .exp-card-top h3 {
        font-size: 28px;
        margin: 0;
    }

    .exp-card-body {
        padding: 25px;
    }

    .exp-card-body p {
        color: #647168;
        line-height: 1.8;
        margin: 0;
    }

    .exp-card-body h4 {
        font-size: 15px;
        color: #174d3c;
        font-weight: 700;
        margin: 20px 0 8px;
    }

    .exp-tag {
        display: inline-block;
        margin-top: 17px;
        padding: 6px 10px;
        border-radius: 4px;
        background: #edf4ed;
        color: #28744f;
        font-size: 12px;
        font-weight: 700;
    }

    .exp-adventure {
        background: #eaf0e9;
    }

    .exp-adventure .exp-card-top {
        background: linear-gradient(135deg, #244d3b, #648c67);
    }

    .exp-adventure .exp-card:nth-child(2) .exp-card-top {
        background: linear-gradient(135deg, #315d70, #719da7);
    }

    .exp-adventure .exp-card:nth-child(3) .exp-card-top {
        background: linear-gradient(135deg, #7a572d, #c19a5c);
    }

    .exp-note {
        margin-top: 35px;
        padding: 25px 28px;
        border-left: 4px solid #d18b43;
        background: #fff;
        border-radius: 4px;
        color: #59665d;
        line-height: 1.8;
    }

    .exp-note strong {
        color: #174d3c;
    }

    .exp-plans {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 25px;
    }

    .exp-plan {
        padding: 32px;
        background: white;
        border: 1px solid #e4e9e4;
        border-radius: 8px;
    }

    .exp-plan h3 {
        color: #174d3c;
        font-size: 25px;
        margin-bottom: 12px;
    }

    .exp-plan p {
        color: #647168;
        line-height: 1.8;
        margin-bottom: 0;
    }

    .exp-final {
        text-align: center;
        background: #174d3c;
        color: white;
        padding: 58px 25px;
    }

    .exp-final h2 {
        font-size: clamp(28px, 4vw, 38px);
        margin-bottom: 15px;
    }

    .exp-final p {
        max-width: 650px;
        margin: 0 auto;
        color: #e0e9e1;
        line-height: 1.8;
    }

    @media (max-width: 850px) {
        .exp-grid {
            grid-template-columns: 1fr 1fr;
        }

        .exp-hero {
            min-height: 390px;
            padding: 55px 7%;
        }
    }

    @media (max-width: 580px) {
        .exp-grid,
        .exp-plans {
            grid-template-columns: 1fr;
        }

        .exp-section {
            padding: 48px 18px;
        }

        .exp-hero {
            padding: 45px 22px;
        }
    }
</style>

<div class="experiencias">

    <!-- PORTADA -->
    <section class="exp-hero">
        <div class="exp-hero-content">
            <div class="exp-eyebrow">Sabores, naturaleza y aventura</div>

            <h1>Viví Misiones de una manera diferente</h1>

            <p>
                Descubrí los sabores de la región, recorré senderos rodeados
                de selva y encontrá nuevas formas de disfrutar una provincia
                donde la naturaleza y la cultura se encuentran.
            </p>

            <a href="#gastronomia" class="exp-button">
                Descubrir experiencias
            </a>
        </div>
    </section>

    <!-- GASTRONOMÍA -->
    <section class="exp-section" id="gastronomia">
        <div class="exp-section-heading">
            <span>Identidad regional</span>
            <h2>Los sabores de Misiones</h2>
            <p>
                La cocina misionera reúne tradiciones guaraníes y aportes
                de distintas comunidades. Sus recetas aprovechan ingredientes
                regionales y forman parte de la identidad de la provincia.
            </p>
        </div>

        <div class="exp-grid">

            <article class="exp-card">
                <div class="exp-card-top">
                    <h3>Chipá</h3>
                </div>
                <div class="exp-card-body">
                    <p>
                        Un clásico de la región elaborado principalmente
                        con almidón de mandioca y queso. Es habitual
                        encontrarlo en panaderías, ferias y puestos locales.
                    </p>
                    <span class="exp-tag">Tradición regional</span>
                </div>
            </article>

            <article class="exp-card">
                <div class="exp-card-top">
                    <h3>Reviro</h3>
                </div>
                <div class="exp-card-body">
                    <p>
                        Preparación sencilla a base de harina, agua, sal
                        y aceite. Está muy presente en la vida cotidiana
                        de la región y suele acompañarse con mate cocido.
                    </p>
                    <span class="exp-tag">Cocina casera</span>
                </div>
            </article>

            <article class="exp-card">
                <div class="exp-card-top">
                    <h3>Yerba mate</h3>
                </div>
                <div class="exp-card-body">
                    <p>
                        Misiones es una de las principales provincias
                        productoras de yerba mate del país. Conocer su
                        cultivo y elaboración permite acercarse a una
                        tradición profundamente argentina.
                    </p>
                    <span class="exp-tag">Producción local</span>
                </div>
            </article>

        </div>

        <div class="exp-note">
            <strong>Para tener en cuenta:</strong>
            en ferias y mercados regionales también podés encontrar
            productos elaborados con mandioca, dulces, mieles y otros
            alimentos de productores locales.
        </div>
    </section>

    <!-- AVENTURA -->
    <section class="exp-adventure">
        <div class="exp-section">
            <div class="exp-section-heading">
                <span>Para los que quieren explorar</span>
                <h2>Aventura en plena naturaleza</h2>
                <p>
                    La selva, los ríos y los saltos de agua ofrecen distintas
                    alternativas para quienes buscan movimiento, paisajes
                    y contacto con el entorno natural.
                </p>
            </div>

            <div class="exp-grid">

                <article class="exp-card">
                    <div class="exp-card-top">
                        <h3>Senderismo</h3>
                    </div>
                    <div class="exp-card-body">
                        <p>
                            Caminá por senderos naturales, observá la
                            vegetación de la selva paranaense y descubrí
                            la diversidad de aves y otras especies de la zona.
                        </p>
                        <h4>Ideal para</h4>
                        <p>
                            Amantes de la naturaleza, la fotografía
                            y los paseos al aire libre.
                        </p>
                        <span class="exp-tag">Naturaleza</span>
                    </div>
                </article>

                <article class="exp-card">
                    <div class="exp-card-top">
                        <h3>Kayak y ríos</h3>
                    </div>
                    <div class="exp-card-body">
                        <p>
                            En los lugares habilitados, las actividades
                            náuticas permiten conocer el paisaje desde
                            otra perspectiva y disfrutar de los cursos de agua.
                        </p>
                        <h4>Ideal para</h4>
                        <p>
                            Quienes buscan una experiencia diferente
                            y disfrutan de las actividades acuáticas.
                        </p>
                        <span class="exp-tag">Aventura acuática</span>
                    </div>
                </article>

                <article class="exp-card">
                    <div class="exp-card-top">
                        <h3>Saltos y cascadas</h3>
                    </div>
                    <div class="exp-card-body">
                        <p>
                            Los saltos de agua y los espacios naturales
                            invitan a recorrer miradores, hacer caminatas
                            y disfrutar de paisajes únicos de la provincia.
                        </p>
                        <h4>Ideal para</h4>
                        <p>
                            Escapadas en familia, paseos tranquilos
                            y excursiones fotográficas.
                        </p>
                        <span class="exp-tag">Paisajes naturales</span>
                    </div>
                </article>

            </div>

            <div class="exp-note">
                <strong>Importante:</strong>
                las actividades disponibles dependen del lugar, la temporada
                y las condiciones climáticas. Antes de salir, consultá
                los accesos habilitados y las indicaciones de los guías.
            </div>
        </div>
    </section>

    <!-- IDEAS PARA ORGANIZAR EL VIAJE -->
    <section class="exp-section">
        <div class="exp-section-heading">
            <span>Organizá tu recorrido</span>
            <h2>¿Qué tipo de experiencia buscás?</h2>
            <p>
                Podés combinar distintas propuestas según el tiempo que
                tengas disponible y el tipo de viaje que quieras hacer.
            </p>
        </div>

        <div class="exp-plans">

            <article class="exp-plan">
                <h3>Una escapada tranquila</h3>
                <p>
                    Recorré atractivos naturales durante el día, conocé
                    la gastronomía regional y reservá tiempo para visitar
                    ferias, espacios culturales y emprendimientos locales.
                </p>
            </article>

            <article class="exp-plan">
                <h3>Un viaje de aventura</h3>
                <p>
                    Organizá caminatas y excursiones, explorá los paisajes
                    de la provincia y consultá opciones de actividades
                    guiadas para aprovechar cada salida de forma segura.
                </p>
            </article>

        </div>
    </section>

    <!-- CIERRE -->
    <section class="exp-final">
        <h2>Misiones tiene mucho para ofrecer</h2>
        <p>
            Desde una comida típica hasta una caminata por la selva,
            cada experiencia es una oportunidad para conocer mejor
            la provincia y llevarte un recuerdo diferente.
        </p>
    </section>

</div>

<?php
    include("template/footer.php");
?>