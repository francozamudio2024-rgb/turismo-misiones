<?php
    $seccion = 'sobre_misiones';
    include("template/header.php");
?>

<style>
    .cultura {
        font-family: 'DM Sans', Arial, sans-serif;
        color: #26382f;
        background: #f5f7f5;
    }

    .cultura h1,
    .cultura h2,
    .cultura h3 {
        font-family: Georgia, 'Times New Roman', serif;
    }

    .cultura-hero {
        min-height: 360px;
        padding: 75px 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: white;
        background:
            linear-gradient(rgba(14, 39, 29, .68), rgba(14, 39, 29, .68)),
            url('<?= base_url('img/fondo2.jpg') ?>') center 45% / cover;
    }

    .cultura-hero .contenido {
        max-width: 780px;
    }

    .cultura-hero .etiqueta {
        display: inline-block;
        color: #f2c66d;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 3px;
        text-transform: uppercase;
        margin-bottom: 18px;
    }

    .cultura-hero h1 {
        font-size: clamp(38px, 5vw, 60px);
        line-height: 1.12;
        margin-bottom: 22px;
    }

    .cultura-hero p {
        max-width: 650px;
        margin: 0 auto;
        font-size: 17px;
        line-height: 1.8;
        color: #f0f3ef;
    }

    .cultura-seccion {
        padding: 65px 0;
    }

    .cultura-intro {
        max-width: 790px;
        margin: 0 auto 38px;
        text-align: center;
    }

    .cultura-intro .subtitulo {
        color: #28744f;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 2px;
        text-transform: uppercase;
    }

    .cultura-intro h2 {
        font-size: clamp(30px, 4vw, 42px);
        margin: 12px 0 18px;
    }

    .cultura-intro p {
        color: #657168;
        line-height: 1.85;
        margin-bottom: 0;
    }

    .cultura-tarjeta {
        height: 100%;
        background: white;
        border: 1px solid #e2e8e2;
        border-radius: 12px;
        padding: 30px;
        transition: transform .2s ease, box-shadow .2s ease;
    }

    .cultura-tarjeta:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 28px rgba(24, 55, 38, .08);
    }

    .cultura-numero {
        color: #28744f;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 2px;
        margin-bottom: 15px;
    }

    .cultura-tarjeta h3 {
        font-size: 25px;
        margin-bottom: 14px;
    }

    .cultura-tarjeta p {
        color: #68736b;
        line-height: 1.8;
        margin-bottom: 0;
    }

    .cultura-franja {
        background: #174d3c;
        color: white;
        padding: 55px 0;
    }

    .cultura-franja h2 {
        font-size: clamp(28px, 4vw, 38px);
        margin-bottom: 18px;
    }

    .cultura-franja p {
        color: #e0e9e2;
        line-height: 1.85;
        margin-bottom: 0;
    }

    .cultura-dato {
        border-left: 2px solid #e6a100;
        padding: 4px 0 4px 20px;
        margin-bottom: 24px;
    }

    .cultura-dato h3 {
        font-size: 21px;
        margin-bottom: 8px;
    }

    .cultura-dato p {
        color: #e0e9e2;
        font-size: 15px;
    }

    .cultura-cierre {
        padding: 55px 20px;
        text-align: center;
    }

    .cultura-cierre h2 {
        font-size: 32px;
        margin-bottom: 15px;
    }

    .cultura-cierre p {
        max-width: 700px;
        margin: 0 auto;
        color: #68736b;
        line-height: 1.8;
    }

    @media (max-width: 768px) {
        .cultura-hero {
            min-height: 320px;
            padding: 55px 20px;
        }

        .cultura-seccion {
            padding: 45px 0;
        }

        .cultura-tarjeta {
            padding: 25px;
        }
    }
</style>

<div class="cultura">

    <section class="cultura-hero">
        <div class="contenido">
            <span class="etiqueta">Identidad misionera</span>
            <h1>Cultura y geografía</h1>
            <p>
                Una tierra de selva, ríos y tradiciones que se encuentran.
                Descubrí el paisaje, la historia y las comunidades que
                hacen de Misiones una provincia única.
            </p>
        </div>
    </section>

    <section class="cultura-seccion">
        <div class="container">

            <div class="cultura-intro">
                <span class="subtitulo">El territorio</span>
                <h2>Una provincia entre ríos y selva</h2>
                <p>
                    Ubicada en el noreste argentino, Misiones se distingue
                    por su tierra rojiza, su vegetación subtropical y sus
                    numerosos cursos de agua. Su paisaje está marcado por
                    la presencia de los ríos Paraná, Uruguay e Iguazú.
                </p>
            </div>

            <div class="row g-4">

                <div class="col-md-6 col-lg-4">
                    <article class="cultura-tarjeta">
                        <div class="cultura-numero">01 / GEOGRAFÍA</div>
                        <h3>Selva paranaense</h3>
                        <p>
                            La selva misionera forma parte de uno de los
                            ambientes de mayor biodiversidad de la región.
                            Alberga una gran variedad de árboles, plantas,
                            aves y mamíferos, y cumple un papel fundamental
                            en la conservación del ecosistema.
                        </p>
                    </article>
                </div>

                <div class="col-md-6 col-lg-4">
                    <article class="cultura-tarjeta">
                        <div class="cultura-numero">02 / CLIMA</div>
                        <h3>Calor y humedad</h3>
                        <p>
                            El clima es subtropical, con temperaturas
                            generalmente cálidas y precipitaciones durante
                            buena parte del año. La humedad favorece el
                            desarrollo de la vegetación y el caudal de
                            saltos y arroyos.
                        </p>
                    </article>
                </div>

                <div class="col-md-6 col-lg-4">
                    <article class="cultura-tarjeta">
                        <div class="cultura-numero">03 / AGUA</div>
                        <h3>Ríos y cascadas</h3>
                        <p>
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

    <section class="cultura-franja">
        <div class="container">
            <div class="row align-items-start g-5">

                <div class="col-lg-6">
                    <span class="cultura-intro subtitulo"
                          style="display:block; text-align:left; color:#f2c66d;">
                        Historia y diversidad
                    </span>

                    <h2>Tradiciones que siguen vivas</h2>

                    <p>
                        La identidad misionera se construyó a partir del
                        encuentro de distintas culturas. La herencia de
                        los pueblos originarios, la historia de las
                        misiones jesuíticas y las corrientes migratorias
                        forman parte de sus costumbres, su gastronomía
                        y su vida cotidiana.
                    </p>
                </div>

                <div class="col-lg-6">

                    <div class="cultura-dato">
                        <h3>Pueblos originarios</h3>
                        <p>
                            El pueblo Mbya Guaraní mantiene una presencia
                            fundamental en la provincia, con su lengua,
                            sus conocimientos y sus formas propias de
                            relacionarse con el territorio.
                        </p>
                    </div>

                    <div class="cultura-dato">
                        <h3>Herencia jesuítica</h3>
                        <p>
                            Las reducciones jesuíticas dejaron un legado
                            histórico y arquitectónico que puede conocerse
                            en sitios como San Ignacio Miní.
                        </p>
                    </div>

                    <div class="cultura-dato">
                        <h3>Una cultura diversa</h3>
                        <p>
                            Las comunidades de distintos orígenes
                            contribuyeron a las tradiciones, los sabores
                            y las celebraciones que caracterizan a Misiones.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="cultura-seccion">
        <div class="container">

            <div class="cultura-intro">
                <span class="subtitulo">Para organizar tu visita</span>
                <h2>¿Cuándo viajar a Misiones?</h2>
                <p>
                    La provincia puede visitarse durante todo el año.
                    La mejor época depende de las actividades que quieras
                    realizar y de las condiciones del clima.
                </p>
            </div>

            <div class="row g-4">

                <div class="col-md-6">
                    <article class="cultura-tarjeta">
                        <div class="cultura-numero">PRIMAVERA Y OTOÑO</div>
                        <h3>Para recorrer con tranquilidad</h3>
                        <p>
                            Suelen ofrecer temperaturas más moderadas
                            que el verano. Son buenas estaciones para
                            caminar por senderos, visitar parques y
                            conocer sitios históricos.
                        </p>
                    </article>
                </div>

                <div class="col-md-6">
                    <article class="cultura-tarjeta">
                        <div class="cultura-numero">VERANO E INVIERNO</div>
                        <h3>Dos formas de descubrirla</h3>
                        <p>
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

    <section class="cultura-cierre">
        <h2>Conocer Misiones es conocer su gente</h2>
        <p>
            Más allá de sus paisajes, la provincia invita a descubrir
            historias, costumbres y formas de vida que enriquecen cada
            recorrido. Cuidar el ambiente y respetar a las comunidades
            locales también forma parte de viajar responsablemente.
        </p>
    </section>

</div>

<?php
    include("template/footer.php");
?>