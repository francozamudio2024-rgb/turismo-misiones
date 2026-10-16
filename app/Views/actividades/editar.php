
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar actividad - Turismo Misiones</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f7f2;
            color: #24432e;
            margin: 0;
            padding: 30px 15px;
        }

        form {
            max-width: 600px;
            margin: auto;
            padding: 25px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px #00000015;
        }

        h1 {
            text-align: center;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }

        input, textarea {
            width: 100%;
            box-sizing: border-box;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 15px;
        }

        button, .volver {
            display: inline-block;
            margin-top: 20px;
            padding: 11px 16px;
            border: none;
            border-radius: 6px;
            text-decoration: none;
            cursor: pointer;
            font-size: 15px;
        }

        button {
            background: #198754;
            color: white;
        }

        .volver {
            background: #ddd;
            color: #222;
        }
    </style>
</head>

<body>

    <form action="<?= base_url('actividades/actualizar/' . $actividad['id']) ?>"
          method="post">

        <?= csrf_field() ?>

        <h1>Editar actividad</h1>

        <label>Nombre</label>
        <input type="text" name="nombre"
               value="<?= esc($actividad['nombre']) ?>" required>

        <label>Categoría</label>
        <input type="text" name="categoria"
               value="<?= esc($actividad['categoria']) ?>" required>

        <label>Ubicación</label>
        <input type="text" name="ubicacion"
               value="<?= esc($actividad['ubicacion']) ?>" required>

        <label>Cupos</label>
        <input type="number" name="cupos"
               value="<?= esc($actividad['cupos']) ?>" required>

        <label>Precio</label>
        <input type="number" name="precios" min="0" step="0.01"
               value="<?= esc($actividad['precios']) ?>" required>

        <label>Imagen (nombre del archivo)</label>
        <input type="text" name="imagen"
               value="<?= esc($actividad['imagen']) ?>">

        <label>Temporada</label>
        <input type="text" name="temporada"
               value="<?= esc($actividad['temporada']) ?>">

        <label>Descripción</label>
        <textarea name="descripcion" rows="4" required><?= esc($actividad['descripcion']) ?></textarea>

        <button type="submit">Guardar cambios</button>

        <a class="volver" href="<?= base_url('actividades') ?>">
            Cancelar
        </a>

    </form>

</body>
</html>
