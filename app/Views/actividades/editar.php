
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar actividad - Turismo Misiones</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'DM Sans', sans-serif;
            background: #f5f7f4;
            color: #263b30;
        }

        header {
            background: #174d3c;
            color: white;
            padding: 22px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 16px;
        }

        .marca {
            font-family: 'Playfair Display', serif;
            font-size: 25px;
            font-weight: 700;
            letter-spacing: 0.3px;
        }

        nav {
            display: flex;
            gap: 24px;
            flex-wrap: wrap;
        }

        nav a {
            color: #edf5ef;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            transition: color 0.2s;
        }

        nav a:hover {
            color: #d7b98e;
        }

        main {
            max-width: 850px;
            margin: 48px auto;
            padding: 0 20px;
        }

        .encabezado {
            margin-bottom: 26px;
        }

        .etiqueta {
            color: #43805f;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        h1 {
            font-family: 'Playfair Display', serif;
            font-size: clamp(30px, 5vw, 42px);
            font-weight: 600;
            margin: 10px 0;
            color: #174d3c;
        }

        .encabezado p {
            color: #6c786f;
            font-size: 15px;
            line-height: 1.7;
            margin: 0;
        }

        form {
            background: white;
            padding: 34px;
            border: 1px solid #e3e9e2;
            border-radius: 14px;
            box-shadow: 0 8px 30px #183b2910;
        }

        .campos {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .campo {
            min-width: 0;
        }

        .campo-completo {
            grid-column: 1 / -1;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 13px;
            font-weight: 700;
            color: #344b3c;
        }

        input, textarea {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #dce4dc;
            border-radius: 8px;
            background: #fcfdfb;
            color: #263b30;
            font-family: 'DM Sans', sans-serif;
            font-size: 14px;
            outline: none;
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        input:focus, textarea:focus {
            border-color: #43805f;
            box-shadow: 0 0 0 3px #43805f18;
        }

        textarea {
            resize: vertical;
            min-height: 115px;
            line-height: 1.6;
        }

        .ayuda {
            display: block;
            margin-top: 6px;
            color: #818c83;
            font-size: 12px;
        }

        .acciones {
            display: flex;
            align-items: center;
            gap: 12px;
            flex-wrap: wrap;
            margin-top: 28px;
            padding-top: 22px;
            border-top: 1px solid #edf0ec;
        }

        button, .volver {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            padding: 12px 19px;
            border-radius: 8px;
            font-family: 'DM Sans', sans-serif;
            font-size: 14px;
            font-weight: 700;
            text-decoration: none;
            cursor: pointer;
            transition: background 0.2s;
        }

        button {
            border: none;
            background: #28744f;
            color: white;
        }

        button:hover {
            background: #1d5c3d;
        }

        .volver {
            border: 1px solid #dce4dc;
            background: white;
            color: #435548;
        }

        .volver:hover {
            background: #f2f5f1;
        }

        footer {
            padding: 24px 15px;
            margin-top: 55px;
            border-top: 1px solid #e1e8df;
            color: #758176;
            text-align: center;
            font-size: 12px;
        }

        @media (max-width: 600px) {
            header {
                padding: 20px;
            }

            .marca {
                font-size: 23px;
            }

            nav {
                gap: 16px;
            }

            main {
                margin: 32px auto;
            }

            form {
                padding: 22px 18px;
            }

            .campos {
                grid-template-columns: 1fr;
                gap: 17px;
            }

            .campo-completo {
                grid-column: auto;
            }

            button, .volver {
                flex: 1;
            }
        }
    </style>
</head>

<body>

    <header>
        <div class="marca">Turismo Misiones</div>

        <nav>
            <a href="<?= base_url('/') ?>">Inicio</a>
            <a href="<?= base_url('actividades') ?>">Actividades</a>
            <a href="<?= base_url('reservas') ?>">Reservas</a>
        </nav>
    </header>

    <main>
        <section class="encabezado">
            <span class="etiqueta">Gestión de actividades</span>
            <h1>Editar actividad</h1>
            <p>Actualizá la información del destino o la experiencia turística.</p>
        </section>

        <form action="<?= base_url('actividades/actualizar/' . $actividad['id']) ?>"
              method="post">

            <?= csrf_field() ?>

            <div class="campos">

                <div class="campo">
                    <label for="nombre">Nombre de la actividad</label>
                    <input type="text" id="nombre" name="nombre"
                           value="<?= esc($actividad['nombre']) ?>" required>
                </div>

                <div class="campo">
                    <label for="categoria">Categoría</label>
                    <input type="text" id="categoria" name="categoria"
                           value="<?= esc($actividad['categoria']) ?>" required>
                </div>

                <div class="campo">
                    <label for="ubicacion">Ubicación</label>
                    <input type="text" id="ubicacion" name="ubicacion"
                           value="<?= esc($actividad['ubicacion']) ?>" required>
                </div>

                <div class="campo">
                    <label for="temporada">Temporada</label>
                    <input type="text" id="temporada" name="temporada"
                           value="<?= esc($actividad['temporada']) ?>">
                </div>

                <div class="campo">
                    <label for="cupos">Cupos disponibles</label>
                    <input type="number" id="cupos" name="cupos" min="0"
                           value="<?= esc($actividad['cupos']) ?>" required>
                </div>

                <div class="campo">
                    <label for="precios">Precio por persona</label>
                    <input type="number" id="precios" name="precios"
                           min="0" step="0.01"
                           value="<?= esc($actividad['precios']) ?>" required>
                </div>

                <div class="campo campo-completo">
                    <label for="imagen">Imagen</label>
                    <input type="text" id="imagen" name="imagen"
                           value="<?= esc($actividad['imagen']) ?>">
                    <span class="ayuda">Ingresá el nombre del archivo de imagen, por ejemplo: cataratas.jpg</span>
                </div>

                <div class="campo campo-completo">
                    <label for="descripcion">Descripción</label>
                    <textarea id="descripcion" name="descripcion"
                              required><?= esc($actividad['descripcion']) ?></textarea>
                </div>

            </div>

            <div class="acciones">
                <button type="submit">Guardar cambios</button>

                <a class="volver" href="<?= base_url('actividades') ?>">
                    Cancelar
                </a>
            </div>

        </form>
    </main>

    <footer>
        <p>TP Turismo · Franco Zamudio y Lucas Exequiel Castellví</p>
    </footer>

</body>
</html>
