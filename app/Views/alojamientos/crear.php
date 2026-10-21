<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar alojamiento - Turismo Misiones</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f1f4f0;
            color: #26352b;
        }

        header {
            background: #173f2a;
            padding: 22px 40px;
            color: white;
        }

        header h1 {
            margin: 0;
            font-size: 26px;
        }

        .contenedor {
            max-width: 760px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .formulario {
            background: white;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 6px 22px rgba(0,0,0,0.08);
        }

        h2 {
            margin-top: 0;
            font-size: 30px;
        }

        .subtitulo {
            color: #68736b;
            margin-bottom: 28px;
        }

        label {
            display: block;
            font-weight: bold;
            margin: 18px 0 8px;
        }

        input, select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccd5ce;
            border-radius: 7px;
            font: inherit;
        }

        textarea {
            min-height: 120px;
            resize: vertical;
        }

        .botones {
            display: flex;
            gap: 12px;
            margin-top: 25px;
            flex-wrap: wrap;
        }

        button, .volver {
            border: none;
            border-radius: 7px;
            padding: 12px 18px;
            font: inherit;
            font-weight: bold;
            text-decoration: none;
            cursor: pointer;
        }

        button {
            background: #286b46;
            color: white;
        }

        .volver {
            background: #e7ece8;
            color: #26352b;
        }
    </style>
</head>

<body>

<header>
    <h1>Turismo Misiones</h1>
</header>

<div class="contenedor">
    <div class="formulario">
        <h2>Agregar alojamiento</h2>
        <p class="subtitulo">Completá los datos del lugar que querés incorporar al catálogo.</p>

        <form action="<?= site_url('alojamientos/guardar') ?>" method="POST">
            <?= csrf_field() ?>

            <label for="nombre">Nombre del alojamiento</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="tipo">Tipo de alojamiento</label>
            <select id="tipo" name="tipo" required>
                <option value="">Seleccioná una opción</option>
                <option value="Hotel">Hotel</option>
                <option value="Cabaña">Cabaña</option>
                <option value="Hostería">Hostería</option>
                <option value="Hostel">Hostel</option>
                <option value="Apart hotel">Apart hotel</option>
                <option value="Camping">Camping</option>
            </select>

            <label for="ubicacion">Ubicación</label>
            <input type="text" id="ubicacion" name="ubicacion" placeholder="Ej. Puerto Iguazú, Misiones" required>

            <label for="precios">Precio por noche ($)</label>
            <input type="number" id="precios" name="precios" min="0" step="0.01" required>

            <label for="imagen">Nombre del archivo de imagen</label>
            <input type="text" id="imagen" name="imagen" placeholder="Ej. hotel.jpg">

            <label for="descripcion">Descripción</label>
            <textarea id="descripcion" name="descripcion" placeholder="Describí el alojamiento y sus servicios"></textarea>

            <div class="botones">
                <button type="submit">Guardar alojamiento</button>
                <a href="<?= site_url('alojamientos') ?>" class="volver">Cancelar</a>
            </div>
        </form>
    </div>
</div>

</body>
</html>