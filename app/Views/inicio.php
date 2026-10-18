<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Turismo Misiones</title>

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
            font-weight: bold;
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
            transition: opacity 0.2s;
        }

        nav a:hover {
            opacity: 0.75;
        }

        /* ---------- HERO ---------- */

        .hero {
            min-height: 520px;
            background:
                linear-gradient(rgba(0, 0, 0, 0.48), rgba(0, 0, 0, 0.48)),
                url('<?= base_url('img/fondo.jpg') ?>') center/cover;

            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            padding: 40px 20px;
        }

        .hero-content {
            max-width: 760px;
        }

        .hero h2 {
            font-size: 52px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .hero p {
            font-size: 19px;
            line-height: 1.7;
            margin-bottom: 32px;
        }

        .boton {
            display: inline-block;
            background: #c95d22;
            color: white;
            text-decoration: none;
            padding: 13px 27px;
            border-radius: 5px;
            font-weight: bold;
            transition: background 0.2s;
        }

        .boton:hover {
            background: #a94b1b;
        }

        /* ---------- INFORMACION ---------- */

        .seccion {
            max-width: 1050px;
            margin: 0 auto;
            padding: 65px 25px;
            text-align: center;
        }

        .seccion h2 {
            color: #174d3c;
            font-size: 29px;
            margin-bottom: 18px;
        }

        .seccion p {
            max-width: 750px;
            margin: auto;
            line-height: 1.8;
            color: #555;
            font-size: 16px;
        }

        /* ---------- BLOQUES ---------- */

        .bloques {
            max-width: 1050px;
            margin: 0 auto 65px;
            padding: 0 25px;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
        }

        .bloque {
            background: white;
            padding: 28px 24px;
            border: 1px solid #e3e8e4;
            border-radius: 8px;
            text-align: center;
        }

        .bloque h3 {
            color: #174d3c;
            margin-bottom: 12px;
            font-size: 20px;
        }

        .bloque p {
            color: #666;
            line-height: 1.6;
            font-size: 15px;
        }

        /* ---------- PIE ---------- */

        footer {
            background: #174d3c;
            color: white;
            text-align: center;
            padding: 24px;
            margin-top: 20px;
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

            .hero {
                min-height: 450px;
            }

            .hero h2 {
                font-size: 38px;
            }

            .hero p {
                font-size: 17px;
            }

            .bloques {
                grid-template-columns: 1fr;
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


    <section class="hero">

        <div class="hero-content">

            <h2>Descubrí Misiones</h2>

            <p>
                Conocé los paisajes, lugares y experiencias que hacen
                de Misiones un destino único.
            </p>

            <a href="/actividades" class="boton">
                Ver actividades
            </a>

        </div>

    </section>


    <section class="seccion">

        <h2>Viví una experiencia diferente</h2>

        <p>
            Encontrá actividades turísticas, lugares para visitar y
            experiencias para disfrutar en distintos puntos de la
            provincia de Misiones.
        </p>

    </section>


    <section class="bloques">

        <div class="bloque">

            <h3>Destinos</h3>

            <p>
                Conocé algunos de los lugares más destacados
                de la provincia de Misiones.
            </p>

        </div>


        <div class="bloque">

            <h3>Actividades</h3>

            <p>
                Explorá diferentes propuestas y experiencias
                disponibles para los visitantes.
            </p>

        </div>


        <div class="bloque">

            <h3>Reservas</h3>

            <p>
                Consultá las actividades disponibles y
                realizá una reserva de forma sencilla.
            </p>

        </div>

    </section>


    <footer>

        <p>TP Turismo . Franco Zamudio y Lucas Exequiel Castellví</p>

    </footer>

</body>
</html>