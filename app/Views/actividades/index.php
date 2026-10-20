<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Actividades - Turismo Misiones</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f5f7f5;
            color: #222;
        }

        /* ---------- ENCABEZADO ---------- */

        header {
            background: #174d3c;
            color: white;
            padding: 18px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            font-size: 25px;
        }

        nav {
            display: flex;
            gap: 25px;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-size: 15px;
            font-weight: bold;
        }

        nav a:hover {
            opacity: 0.75;
        }

        /* ---------- PORTADA ---------- */

        .portada {
            min-height: 350px;
            padding: 60px 8%;
            display: flex;
            flex-direction: column;
            justify-content: center;

            color: white;

            background:
                linear-gradient(rgba(16, 44, 36, 0.58), rgba(16, 44, 36, 0.58)),
                url("<?= base_url('img/fondo2.jpg') ?>") center/cover;
        }

        .portada h2 {
            max-width: 700px;
            font-size: 48px;
            margin-bottom: 18px;
        }

        .portada p {
            font-size: 19px;
            max-width: 650px;
            line-height: 1.6;
        }

        /* ---------- CONTENIDO ---------- */

        main {
            max-width: 1150px;
            margin: auto;
            padding: 55px 25px 70px;
        }

        .encabezado-actividades {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            margin-bottom: 35px;
        }

        .encabezado-actividades h2 {
            color: #174d3c;
            font-size: 30px;
            margin-bottom: 8px;
        }

        .encabezado-actividades p {
            color: #666;
        }

        .boton-agregar {
            display: inline-block;
            background: #174d3c;
            color: white;
            text-decoration: none;
            padding: 12px 20px;
            border-radius: 5px;
            font-weight: bold;
            white-space: nowrap;
        }

        .boton-agregar:hover {
            background: #123d30;
        }

        /* ---------- TARJETAS ---------- */

        .actividades {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
        }

        .tarjeta {
            background: white;
            border: 1px solid #e2e7e3;
            border-radius: 8px;
            overflow: hidden;
        }

        .tarjeta img {
            width: 100%;
            height: 210px;
            object-fit: cover;
            display: block;
        }

        .contenido {
            padding: 22px;
        }

        .categoria {
            display: block;
            color: #28744f;
            font-weight: bold;
            font-size: 12px;
            text-transform: uppercase;
            margin-bottom: 8px;
        }

        .contenido h3 {
            color: #174d3c;
            font-size: 22px;
            margin-bottom: 10px;
        }

        .ubicacion {
            color: #555;
            font-weight: bold;
            margin-bottom: 12px;
        }

        .descripcion {
            color: #666;
            line-height: 1.6;
            min-height: 75px;
            margin-bottom: 15px;
        }

        .cupos {
            color: #555;
            font-size: 14px;
            margin-bottom: 12px;
        }

        .precio {
            font-size: 23px;
            font-weight: bold;
            color: #174d3c;
            margin-bottom: 18px;
        }

        /* ---------- BOTONES ---------- */

        .acciones {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .boton-editar,
        .boton-eliminar {
            padding: 10px 15px;
            border-radius: 5px;
            font-weight: bold;
            font-size: 14px;
            cursor: pointer;
            text-decoration: none;
        }

        .boton-editar {
            background: #174d3c;
            color: white;
        }

        .boton-editar:hover {
            background: #123d30;
        }

        .boton-eliminar {
            background: #a94442;
            color: white;
            border: none;
        }

        .boton-eliminar:hover {
            background: #893735;
        }

        .sin-actividades {
            background: white;
            border: 1px solid #e2e7e3;
            padding: 30px;
            border-radius: 8px;
            color: #666;
            text-align: center;
        }

        /* ---------- PIE ---------- */

        footer {
            background: #174d3c;
            color: white;
            text-align: center;
            padding: 24px;
        }

        footer p {
            font-size: 14px;
        }

        /* ---------- RESPONSIVE ---------- */

        @media (max-width: 750px) {

            header {
                flex-direction: column;
                gap: 15px;
                padding: 18px 20px;
            }

            nav {
                gap: 15px;
                flex-wrap: wrap;
                justify-content: center;
            }

            .portada {
                min-height: 320px;
                padding: 45px 25px;
            }

            .portada h2 {
                font-size: 36px;
            }

            .portada p {
                font-size: 17px;
            }

            .encabezado-actividades {
                flex-direction: column;
                align-items: flex-start;
            }

            .boton-agregar {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>

<body>

<header>

    <h1>Turismo Misiones</h1>

    <nav>
        <a href="/">Inicio</a>
        <a href="/actividades">Actividades</a>
        <a href="/reservas">Reservas</a>
    </nav>

</header>


<section class="portada">

    <h2>Viví una experiencia única en Misiones</h2>

    <p>
        Explorá paisajes, lugares y actividades para disfrutar
        de la provincia.
    </p>

</section>


<main>

    <div class="encabezado-actividades">

        <div>
            <h2>Nuestras actividades</h2>

            <p>
                Elegí una propuesta y descubrí nuevos lugares.
            </p>
        </div>

        <a
            href="<?= base_url('actividades/crear') ?>"
            class="boton-agregar"
        >
            + Agregar actividad
        </a>

    </div>


    <div class="actividades">

        <?php if (!empty($actividades)): ?>

            <?php foreach ($actividades as $actividad): ?>

                <article class="tarjeta">

                    <img
                        src="<?= base_url('img/' . $actividad['imagen']) ?>"
                        alt="<?= esc($actividad['nombre']) ?>"
                    >

                    <div class="contenido">

                        <span class="categoria">
                            <?= esc($actividad['categoria']) ?>
                        </span>

                        <h3>
                            <?= esc($actividad['nombre']) ?>
                        </h3>

                        <p class="ubicacion">
                            <?= esc($actividad['ubicacion']) ?>
                        </p>

                        <p class="descripcion">
                            <?= esc($actividad['descripcion']) ?>
                        </p>

                        <p class="cupos">
                            Cupos disponibles:
                            <?= esc($actividad['cupos']) ?>
                        </p>

                        <p class="precio">
                            $<?= number_format((float) $actividad['precios'], 0, ',', '.') ?>
                        </p>

                        <div class="acciones">

                            <a
                                href="<?= base_url('actividades/editar/' . $actividad['id']) ?>"
                                class="boton-editar"
                            >
                                Editar
                            </a>

                            <form
                                action="<?= base_url('actividades/eliminar/' . $actividad['id']) ?>"
                                method="post"
                                onsubmit="return confirm('¿Seguro que querés eliminar esta actividad?');"
                            >

                                <?= csrf_field() ?>

                                <button
                                    type="submit"
                                    class="boton-eliminar"
                                >
                                    Eliminar
                                </button>

                            </form>

                        </div>

                    </div>

                </article>

            <?php endforeach; ?>

        <?php else: ?>

            <div class="sin-actividades">
                <p>Todavía no hay actividades publicadas.</p>
            </div>

        <?php endif; ?>

    </div>

<?php
    include("template/footer.php");
?>