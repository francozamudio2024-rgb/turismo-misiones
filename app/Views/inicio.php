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
            background: #f4f7f5;
            color: #222;
        }

        header {
            background: #174d3c;
            color: white;
            padding: 20px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            font-size: 26px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 25px;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .hero {
            min-height: 500px;
            background:
                linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),
                url('/img/cataratas.jpg') center/cover;

            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            padding: 30px;
        }

        .hero-content {
            max-width: 700px;
        }

        .hero h2 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 20px;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        .boton {
            display: inline-block;
            background: #d35400;
            color: white;
            text-decoration: none;
            padding: 14px 28px;
            border-radius: 6px;
            font-weight: bold;
        }

        .boton:hover {
            background: #a94300;
        }

        .seccion {
            max-width: 1000px;
            margin: 50px auto;
            padding: 0 25px;
            text-align: center;
        }

        .seccion h2 {
            color: #174d3c;
            margin-bottom: 15px;
        }

        .seccion p {
            line-height: 1.7;
            color: #555;
        }

        footer {
            background: #174d3c;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 60px;
        }

        @media (max-width: 700px) {
            header {
                flex-direction: column;
                gap: 15px;
            }

            nav a {
                margin: 0 8px;
            }

            .hero h2 {
                font-size: 34px;
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

    <footer>
        Turismo Misiones
    </footer>

</body>
</html>