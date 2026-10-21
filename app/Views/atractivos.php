<?php
    $seccion = 'atractivos';
    include("template/header.php");
?>

<style>
    .atractivos-hero {
        background:
            linear-gradient(rgba(23, 77, 60, 0.82), rgba(23, 77, 60, 0.82)),
            url("<?= base_url('img/fondo2.jpg') ?>") center/cover;
        border-radius: 0 0 24px 24px;
        padding: 75px 20px;
        color: white;
        text-align: center;
    }

    .atractivos-hero h2 {
        font-family: Georgia, serif;
        font-size: clamp(32px, 5vw, 52px);
        font-weight: 700;
        margin-bottom: 15px;
    }

    .atractivos-hero p {
        max-width: 720px;
        margin: auto;
        font-size: 17px;
        line-height: 1.7;
        color: #edf5ef;
    }

    .seccion-atractivos {
        padding: 55px 0;
    }

    .titulo-seccion {
        font-family: Georgia, serif;
        color: #174d3c;
        font-size: 32px;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .texto-seccion {
        color: #66736a;
        max-width: 700px;
        margin-bottom: 35px;
        line-height: 1.7;
    }

    .tarjeta-atractivo {
        height: 100%;
        border: none;
        border-radius: 15px;
        overflow: hidden;
        background: white;
        box-shadow: 0 6px 22px rgba(25, 60, 40, 0.10);
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .tarjeta-atractivo:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 28px rgba(25, 60, 40, 0.16);
    }

    .imagen-atractivo {
        width: 100%;
        height: 220px;
        object-fit: cover;
    }

    .contenido-tarjeta {
        padding: 24px;
    }

    .categoria {
        display: inline-block;
        color: #28744f;
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 8px;
    }

    .contenido-tarjeta h3 {
        color: #174d3c;
        font-size: 23px;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .contenido-tarjeta p {
        color: #68746b;
        line-height: 1.65;
        font-size: 14px;
        margin-bottom: 0;
    }

    .destacado {
        background: #edf4ef;
        border-radius: 16px;
        padding: 30px;
        margin-top: 45px;
        border-left: 5px solid #28744f;
    }

    .destacado h3 {
        color: #174d3c;
        font-family: Georgia, serif;
        font-size: 25px;
        margin-bottom: 10px;
    }

    .destacado p {
        color: #59665d;
        line-height: 1.7;
        margin-bottom: 0;
    }
</style>

<section class="atractivos-hero">
    <div class="container">
        <h2>Destinos y Atractivos</h2>

        <p>
            Descubrí los paisajes, lugares históricos y espacios naturales
            que hacen de Misiones uno de los destinos más destacados de Argentina.
        </p>
    </div>
</section>

<section class="seccion-atractivos">
    <div class="container">

        <h2 class="titulo-seccion">Lugares imperdibles</h2>

        <p class="texto-seccion">
            Desde grandes saltos de agua hasta antiguas construcciones jesuíticas,
            Misiones combina naturaleza, historia y cultura en diferentes puntos
            de la provincia.
        </p>

        <div class="row g-4">

            <div class="col-md-6 col-lg-4">
                <article class="tarjeta-atractivo">

                    <img
                        src="<?= base_url('img/fondo2.jpg') ?>"
                        alt="Cataratas del Iguazú"
                        class="imagen-atractivo"
                    >

                    <div class="contenido-tarjeta">
                        <span class="categoria">Naturaleza</span>

                        <h3>Cataratas del Iguazú</h3>

                        <p>
                            Uno de los principales atractivos naturales de Misiones,
                            conocido por sus enormes saltos de agua y la selva que
                            los rodea.
                        </p>
                    </div>

                </article>
            </div>

            <div class="col-md-6 col-lg-4">
                <article class="tarjeta-atractivo">

                    <img
                        src="<?= base_url('img/cataratas.jpg') ?>"
                        alt="Paisaje de Misiones"
                        class="imagen-atractivo"
                    >

                    <div class="contenido-tarjeta">
                        <span class="categoria">Historia</span>

                        <h3>Ruinas de San Ignacio</h3>

                        <p>
                            Un importante conjunto histórico de las antiguas
                            misiones jesuíticas, declarado Patrimonio Mundial
                            de la Humanidad.
                        </p>
                    </div>

                </article>
            </div>

            <div class="col-md-6 col-lg-4">
                <article class="tarjeta-atractivo">

                    <img
                        src="<?= base_url('img/fondo.jpg') ?>"
                        alt="Selva misionera"
                        class="imagen-atractivo"
                    >

                    <div class="contenido-tarjeta">
                        <span class="categoria">Aventura</span>

                        <h3>Saltos del Moconá</h3>

                        <p>
                            Una formación natural única donde las aguas del río
                            Uruguay caen de manera longitudinal a lo largo de
                            una falla geológica.
                        </p>
                    </div>

                </article>
            </div>

        </div>

        <div class="destacado">
            <h3>Una provincia para descubrir</h3>

            <p>
                Misiones ofrece mucho más que sus atractivos más conocidos.
                Sus parques naturales, pueblos, caminos rurales y espacios
                culturales permiten descubrir diferentes paisajes y experiencias
                durante todo el año.
            </p>
        </div>

    </div>
</section>

<?php
    include("template/footer.php");
?>