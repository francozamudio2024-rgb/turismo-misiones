<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar actividad - Turismo Misiones</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 30px 15px;
            font-family: Arial, sans-serif;
            background: #f3f7f2;
            color: #20352b;
        }

        main {
            max-width: 650px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 14px;
            box-shadow: 0 4px 15px #00000012;
        }

        h1 {
            color: #174c38;
        }

        label {
            display: block;
            margin-top: 16px;
            font-weight: bold;
        }

        input, textarea, select {
            width: 100%;
            padding: 11px;
            margin-top: 6px;
            border: 1px solid #ccc;
            border-radius: 7px;
            font: inherit;
        }

        button, .volver {
            display: inline-block;
            margin-top: 22px;
            padding: 12px 18px;
            border: none;
            border-radius: 7px;
            background: #174c38;
            color: white;
            text-decoration: none;
            cursor: pointer;
            font-size: 15px;
        }

        .volver {
            background: #65756b;
            margin-left: 8px;
        }
    </style>
</head>

<body>

<main>
    <h1>Agregar actividad</h1>
    <p>Completá los datos del nuevo destino turístico.</p>

    <form action="<?= base_url('actividades/guardar') ?>" method="post">

        <?= csrf_field() ?>

        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="categoria">Categoría</label>
        <input type="text" id="categoria" name="categoria" required>

        <label for="ubicacion">Ubicación</label>
        <input type="text" id="ubicacion" name="ubicacion" required>

        <label for="cupos">Cupos disponibles</label>
        <input type="number" id="cupos" name="cupos" min="0" required>

        <label for="precios">Precio</label>
        <input type="number" id="precios" name="precios" min="0" step="0.01" required>

        <label for="imagen">Nombre del archivo de imagen</label>
        <input type="text" id="imagen" name="imagen"
               placeholder="Ejemplo: cataratas.jpg">

        <label for="temporada">Temporada</label>
        <input type="text" id="temporada" name="temporada">

        <label for="descripcion">Descripción</label>
        <textarea id="descripcion" name="descripcion" rows="4" required></textarea>

        <button type="submit">Guardar actividad</button>

        <a class="volver" href="<?= base_url('actividades') ?>">
            Volver
        </a>

    </form>
</main>

</body>
</html>