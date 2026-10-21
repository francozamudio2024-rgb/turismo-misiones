
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($alojamiento['nombre']) ?> - Turismo Misiones</title>
    <style>
        * { box-sizing: border-box; }
        body { margin: 0; font-family: Arial, sans-serif; background: #f1f4f0; color: #26352b; }
        header { background: #173f2a; color: white; padding: 22px 35px; }
        .contenedor { max-width: 850px; margin: 40px auto; padding: 25px; }
        .tarjeta { background: white; border-radius: 14px; overflow: hidden; box-shadow: 0 5px 18px #00000012; }
        img { width: 100%; height: 350px; object-fit: cover; display: block; }
        .contenido { padding: 28px; }
        h2 { font-size: 30px; margin-top: 0; }
        .tipo { color: #286b46; font-weight: bold; }
        .precio { font-size: 24px; font-weight: bold; margin: 20px 0; }
        .descripcion { line-height: 1.7; color: #59635d; }
        a { display: inline-block; margin-top: 20px; padding: 12px 18px; background: #286b46; color: white; border-radius: 7px; text-decoration: none; }
    </style>
</head>
<body>
<header><h1>Turismo Misiones</h1></header>

<div class="contenedor">
    <div class="tarjeta">
        <?php if (!empty($alojamiento['imagen'])): ?>
            <img src="<?= base_url('img/' . $alojamiento['imagen']) ?>" alt="<?= esc($alojamiento['nombre']) ?>">
        <?php endif; ?>

        <div class="contenido">
            <h2><?= esc($alojamiento['nombre']) ?></h2>
            <p class="tipo"><?= esc($alojamiento['tipo']) ?></p>
            <p>Ubicación: <?= esc($alojamiento['ubicacion']) ?></p>
            <div class="precio">$<?= number_format($alojamiento['precios'], 2, ',', '.') ?> por noche</div>
            <p class="descripcion"><?= nl2br(esc($alojamiento['descripcion'] ?? '')) ?></p>
            <a href="<?= site_url('alojamientos') ?>">Volver al catálogo</a>
        </div>
    </div>
</div>
</body>
</html>