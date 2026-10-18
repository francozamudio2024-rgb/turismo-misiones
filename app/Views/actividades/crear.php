
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Agregar actividad - Turismo Misiones</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f5f7f5;
            color: #26352d;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        header {
            background: #174d3c;
            color: white;
            padding: 18px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            font-size: 25px;
        }

        nav {
            display: flex;
            gap: 25px;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-size: 15px;
            font-weight: bold;
        }

        nav a:hover {
            opacity: 0.75;
        }

        main {
            width: 100%;
            max-width: 760px;
            margin: 45px auto;
            padding: 0 20px;
            flex: 1;
        }

        .encabezado {
            margin-bottom: 25px;
        }

        .encabezado h2 {
            color: #174d3c;
            font-size: 30px;
            margin-bottom: 10px;
        }

        .encabezado p {
            color: #666;
            line-height: 1.6;
        }

        .formulario {
            background: white;
            padding: 30px;
            border: 1px solid #e1e6e2;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
        }

        .campo {
            margin-bottom: 19px;
        }

        label {
            display: block;
            margin-bottom: 7px;
            font-size: 14px;
            font-weight: bold;
            color: #30473a;
        }

        input, textarea, select {
            width: 100%;
            padding: 12px;
            border: 1px solid #cbd4cd;
            border-radius: 5px;
            font-family: Arial, sans-serif;
            font-size: 15px;
            color: #26352d;
            background: white;
        }

        input:focus, textarea:focus, select:focus {
            outline: 2px solid #b8d6c4;
            border-color: #28744f;
        }

        textarea {
            resize: vertical;
            min-height: 110px;
        }

        .acciones {
            display: flex;
            gap: 12px;
            margin-top: 28px;
        }

        .boton {
            display: inline-block;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            font-size: 15px;
            font-weight: bold;
            text-decoration: none;
            text-align: center;
            cursor: pointer;
        }

        .guardar {
            background: #174d3c;
            color: white;
        }

        .guardar:hover {
            background: #123d30;
        }

        .volver {
            background: #e7ece8;
            color: #30473a;
        }

        .volver:hover {
            background: #d9e1db;
        }

        footer {
            background: #174d3c;
            color: white;
            text-align: center;
            padding: 24px 15px;
            margin-top: 20px;
        }

        footer p {
            font-size: 14px;
        }

        @media (max-width: 650px) {
            header {
                flex-direction: column;
                gap: 15px;
                padding: 18px 20px;
            }

            nav {
                gap: 15px;
                flex-wrap: wrap;
                justify-content: center;
            }

            main {
                margin: 30px auto;
            }

            .formulario {
                padding: 22px 18px;
            }

            .acciones {
                flex-direction: column;
            }

            .boton {
                width: 100%;
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
            <a href="/reservas">Reservas</a>
        </nav>
    </header>

    <main>

        <div class="encabezado">
            <h2>Agregar actividad</h2>
            <p>
                Completá los datos para incorporar una nueva
                propuesta turística al listado.
            </p>
        </div>

        <form
            class="formulario"
            action="<?= base_url('actividades/guardar') ?>"
            method="post"
        >

            <?= csrf_field() ?>

            <div class="campo">
                <label for="nombre">Nombre de la actividad</label>
                <input
                    type="text"
                    id="nombre"
                    name="nombre"
                    required
                >
            </div>

            <div class="campo">
                <label for="categoria">Categoría</label>
                <input
                    type="text"
                    id="categoria"
                    name="categoria"
                    required
                >
            </div>

            <div class="campo">
                <label for="ubicacion">Ubicación</label>
                <input
                    type="text"
                    id="ubicacion"
                    name="ubicacion"
                    required
                >
            </div>

            <div class="campo">
                <label for="cupos">Cupos disponibles</label>
                <input
                    type="number"
                    id="cupos"
                    name="cupos"
                    min="0"
                    required
                >
            </div>

            <div class="campo">
                <label for="precios">Precio</label>
                <input
                    type="number"
                    id="precios"
                    name="precios"
                    min="0"
                    step="0.01"
                    required
                >
            </div>

            <div class="campo">
                <label for="imagen">Nombre del archivo de imagen</label>
                <input
                    type="text"
                    id="imagen"
                    name="imagen"
                    placeholder="Ejemplo: cataratas.jpg"
                >
            </div>

            <div class="campo">
                <label for="temporada">Temporada</label>
                <input
                    type="text"
                    id="temporada"
                    name="temporada"
                >
            </div>

            <div class="campo">
                <label for="descripcion">Descripción</label>
                <textarea
                    id="descripcion"
                    name="descripcion"
                    rows="4"
                    required
                ></textarea>
            </div>

            <div class="acciones">
                <button type="submit" class="boton guardar">
                    Guardar actividad
                </button>

                <a
                    class="boton volver"
                    href="<?= base_url('actividades') ?>"
                >
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
