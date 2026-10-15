
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turismo Misiones</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f3f7f2;
            color: #20352b;
        }

        header {
            background: #174c38;
            color: white;
            padding: 22px 8%;
        }

        header h1 {
            margin: 0;
            font-size: 28px;
        }

        header p {
            margin-bottom: 0;
            color: #d6eadc;
        }

        .portada {
            padding: 65px 8%;
            color: white;
            background:
                linear-gradient(#102c24a8, #102c24a8),
                url("<?= base_url('img/cataratas.jpg') ?>")
                center/cover;
        }

        .portada h2 {
            max-width: 650px;
            font-size: clamp(32px, 5vw, 52px);
            margin: 0 0 15px;
        }

        .portada p {
            font-size: 18px;
        }

        main {
            max-width: 1200px;
            margin: auto;
            padding: 40px 20px;
        }

        .actividades {
            display: grid;
            grid-template-columns:
                repeat(auto-fit, minmax(260px, 1fr));
            gap: 25px;
        }

        .tarjeta {
            background: white;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 4px 15px #00000012;
        }

        .tarjeta img {
            width: 100%;
            height: 210px;
            object-fit: cover;
            display: block;
        }

        .contenido {
            padding: 20px;
        }

        .categoria {
            color: #28744f;
            font-weight: bold;
            font-size: 13px;
            text-transform: uppercase;
        }

        .contenido h3 {
            margin-bottom: 10px;
        }

        .precio {
            font-size: 22px;
            font-weight: bold;
            color: #174c38;
        }

        footer {
            text-align: center;
            padding: 25px;
            background: #174c38;
            color: white;
        }
    </style>
</head>

<body>

<header>
    <h1>Turismo Misiones</h1>
    <p>Trabajo Practico</p>
</header>

<section class="portada">
    <h2>Viví una experiencia única en Misiones</h2>
    <p>Explorá paisajes increíbles y descubrí nuevos destinos.</p>
</section>

<main>
    <h2>Nuestras actividades</h2>
    <p>Elegí tu próxima aventura.</p>

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

                        <p>
                             <?= esc($actividad['ubicacion']) ?>
                        </p>

                        <p>
                            <?= esc($actividad['descripcion']) ?>
                        </p>

                        <p>
                            Cupos disponibles:
                            <?= esc($actividad['cupos']) ?>
                        </p>

                        <p class="precio">
                            $<?= number_format((float) $actividad['precios'], 0, ',', '.') ?>
                        </p>

                    </div>
                </article>

            <?php endforeach; ?>

        <?php else: ?>

            <p>Todavía no hay actividades publicadas</p>

        <?php endif; ?>

    </div>
</main>

<footer>
    <p>TP Turismo . Franco Zamudio y Lucas Exequiel Castellví </p>
</footer>

</body>
</html>
