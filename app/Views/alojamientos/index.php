<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alojamientos - Turismo Misiones</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f3;
            color: #26352b;
        }

        header {
            background: #173f2a;
            padding: 22px 40px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            margin: 0;
            font-size: 27px;
        }

        .volver {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        .contenedor {
            max-width: 1200px;
            margin: 45px auto;
            padding: 0 25px;
        }

        .titulo {
            text-align: center;
            margin-bottom: 35px;
        }

        .titulo h2 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        .titulo p {
            color: #68736b;
            font-size: 17px;
        }

        .boton {
            display: inline-block;
            background: #286b46;
            color: white;
            padding: 12px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
        }

        .card {
            background: white;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 5px 18px rgba(0,0,0,0.08);
        }

        .card img {
            width: 100%;
            height: 210px;
            object-fit: cover;
        }

        .sin-imagen {
            height: 210px;
            background: #dce5df;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #637068;
        }

        .contenido {
            padding: 22px;
        }

        .contenido h3 {
            margin-top: 0;
            font-size: 23px;
        }

        .tipo {
            color: #286b46;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .ubicacion {
            color: #657068;
            margin-bottom: 12px;
        }

        .precio {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .descripcion {
            color: #59635d;
            line-height: 1.5;
            margin-bottom: 20px;
        }

        .acciones {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        .acciones a,
        .acciones button {
            border: none;
            padding: 9px 13px;
            border-radius: 7px;
            text-decoration: none;
            cursor: pointer;
            font-weight: bold;
        }

        .editar {
            background: #e8b84a;
            color: #2d2819;
        }

        .eliminar {
            background: #b63d3d;
            color: white;
        }

        .vacio {
            text-align: center;
            background: white;
            padding: 40px;
            border-radius: 12px;
        }
    </style>
</head>

<body>

<header>
    <h1>Turismo Misiones</h1>
    <a href="<?= base_url('/') ?>" class="volver">Volver al inicio</a>
</header>

<div class="contenedor">

    <div class="titulo">
        <h2>Alojamientos</h2>
        <p>Encontrá un lugar para descansar y disfrutar tu estadía en Misiones.</p>
    </div>

    <a href="<?= base_url('alojamientos/crear') ?>" class="boton">Agregar alojamiento</a>

    <?php if (empty($alojamientos)): ?>

        <div class="vacio">
            <h3>Todavía no hay alojamientos</h3>
            <p>Agregá el primero para comenzar a completar el catálogo.</p>
        </div>

    <?php else: ?>

        <div class="grid">

            <?php foreach ($alojamientos as $alojamiento): ?>

                <div class="card">

                    <?php if (!empty($alojamiento['imagen'])): ?>
                        <img src="<?= base_url('img/' . $alojamiento['imagen']) ?>" alt="<?= esc($alojamiento['nombre']) ?>">
                    <?php else: ?>
                        <div class="sin-imagen">Sin imagen</div>
                    <?php endif; ?>

                    <div class="contenido">

                        <h3><?= esc($alojamiento['nombre']) ?></h3>

                        <div class="tipo">
                            <?= esc($alojamiento['tipo']) ?>
                        </div>

                        <div class="ubicacion">
                            <?= esc($alojamiento['ubicacion']) ?>
                        </div>

                        <div class="precio">
                            $<?= number_format($alojamiento['precios'], 2, ',', '.') ?>
                        </div>

                        <div class="descripcion">
                            <?= esc($alojamiento['descripcion']) ?>
                        </div>


                        <a href="<?= site_url('alojamientos/detalle/' . $alojamiento['id']) ?>">Ver detalle</a>
                        <div class="acciones">

                            <a href="<?= base_url('alojamientos/editar/' . $alojamiento['id']) ?>" class="editar">
                                Editar
                            </a>

                            <form action="<?= base_url('alojamientos/eliminar/' . $alojamiento['id']) ?>" method="POST">
                                <?= csrf_field() ?>
                                <button type="submit" class="eliminar">
                                    Eliminar
                                </button>
                            </form>

                        </div>

                    </div>
                </div>

            <?php endforeach; ?>

        </div>

    <?php endif; ?>

</div>

</body>
</html>