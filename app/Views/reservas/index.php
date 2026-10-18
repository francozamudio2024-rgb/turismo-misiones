
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas - Turismo Misiones</title>

    <style>
        * { box-sizing: border-box; }

        body {
            font-family: Arial, sans-serif;
            background: #f3f7f2;
            color: #222;
            margin: 0;
            padding: 25px;
        }

        main {
            max-width: 900px;
            margin: auto;
        }

        h1, h2 { color: #174d3c; }

        form, .reserva {
            background: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 12px;
            box-shadow: 0 2px 8px #0001;
        }

        input, select, button {
            display: block;
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        button, .boton {
            background: #174d3c;
            color: white;
            border: none;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
        }

        .volver { color: #174d3c; }
    </style>
</head>

<body>
<main>
    <h1>Reservas de Turismo Misiones</h1>
    <a class="volver" href="/">← Volver al inicio</a>

    <h2>Crear reserva</h2>

    <form action="<?= base_url('reservas/guardar') ?>" method="post">
        <?= csrf_field() ?>

        <label>ID del usuario existente</label>
        <input type="number" name="usuario_id" min="1" required>

        <label>Actividad</label>
        <select name="actividad_id" required>
            <option value="">Elegí una actividad</option>

            <?php foreach ($actividades as $actividad): ?>
                <option value="<?= $actividad['id'] ?>">
                    <?= esc($actividad['nombre']) ?>
                    - $<?= esc($actividad['precios']) ?>
                </option>
            <?php endforeach; ?>
        </select>

        <label>Cantidad de personas</label>
        <input type="number" name="cantidad" min="1" value="1" required>

        <label>Fecha y hora</label>
        <input type="datetime-local" name="fecha" required>

        <button type="submit">Guardar reserva</button>
    </form>

    <h2>Reservas registradas</h2>

    <?php if (empty($reservas)): ?>
        <p>Todavía no hay reservas registradas.</p>
    <?php else: ?>
        <?php foreach ($reservas as $reserva): ?>
            <div class="reserva">
                <p><strong>Reserva:</strong> #<?= $reserva['id'] ?></p>
                <p><strong>Usuario:</strong> <?= $reserva['usuario_id'] ?></p>
                <p><strong>Actividad:</strong> <?= $reserva['actividad_id'] ?></p>
                <p><strong>Personas:</strong> <?= $reserva['cantidad'] ?></p>
                <p><strong>Fecha:</strong> <?= esc($reserva['fecha']) ?></p>
                <p><strong>Total:</strong> $<?= esc($reserva['total']) ?></p>

                <form
                    action="<?= base_url('reservas/eliminar/' . $reserva['id']) ?>"
                    method="post"
                    onsubmit="return confirm('¿Eliminar esta reserva?')"
                >
                    <?= csrf_field() ?>
                    <button type="submit">Eliminar reserva</button>
                </form>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</main>
</body>
</html>
