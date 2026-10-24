<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar alojamiento</title>
    <style>
        * { box-sizing: border-box; }
        body { margin: 0; font-family: Arial, sans-serif; background: #f1f4f0; color: #26352b; }
        header { background: #173f2a; color: white; padding: 22px 40px; }
        .contenedor { max-width: 700px; margin: 40px auto; padding: 25px; background: white; border-radius: 14px; }
        label { display: block; margin: 16px 0 7px; font-weight: bold; }
        input, select, textarea { width: 100%; padding: 11px; border: 1px solid #ccd5ce; border-radius: 7px; font: inherit; }
        textarea { min-height: 100px; }
        button, .volver { display: inline-block; margin-top: 22px; padding: 12px 17px; border: 0; border-radius: 7px; background: #286b46; color: white; text-decoration: none; cursor: pointer; font-weight: bold; }
        .volver { background: #e7ece8; color: #26352b; margin-left: 8px; }
    </style>
</head>
<body>
<header><h1>Turismo Misiones</h1></header>

<div class="contenedor">
    <h2>Editar alojamiento</h2>

    <form action="<?= site_url('alojamientos/actualizar/' . $alojamiento['id']) ?>" method="POST">
        <?= csrf_field() ?>

        <label>Nombre</label>
        <input type="text" name="nombre" value="<?= esc($alojamiento['nombre']) ?>" required>

        <label>Tipo</label>
        <input type="text" name="tipo" value="<?= esc($alojamiento['tipo']) ?>" required>

        <label>Ubicación</label>
        <input type="text" name="ubicacion" value="<?= esc($alojamiento['ubicacion']) ?>" required>

        <label>Precio por noche</label>
       