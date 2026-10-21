<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas - Turismo Misiones</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f3f7f2;
            color: #26382f;
            margin: 0;
            padding: 25px;
        }

        main {
            max-width: 950px;
            margin: auto;
        }

        h1, h2, h3 {
            color: #174d3c;
        }

        h1 {
            margin-bottom: 8px;
        }

        .volver {
            display: inline-block;
            margin: 8px 0 25px;
            color: #174d3c;
            text-decoration: none;
            font-weight: bold;
        }

        .panel, .reserva {
            background: white;
            padding: 24px;
            margin-bottom: 24px;
            border-radius: 12px;
            border: 1px solid #e1e8e1;
            box-shadow: 0 3px 12px #00000008;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
            font-size: 14px;
        }

        input, select {
            display: block;
            width: 100%;
            padding: 12px;
            margin-top: 7px;
            border: 1px solid #ccd5cd;
            border-radius: 6px;
            background: white;
            font: inherit;
        }

        input:focus, select:focus {
            outline: 2px solid #b5d4bf;
            border-color: #28744f;
        }

        button, .boton {
            display: inline-block;
            padding: 12px 18px;
            border: none;
            border-radius: 6px;
            background: #174d3c;
            color: white;
            font: inherit;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
        }

        button:hover, .boton:hover {
            background: #28744f;
        }

        .formulario-boton {
            width: 100%;
            margin-top: 22px;
        }

        .boton-cancelar {
            background: #e8ece8;
            color: #26382f;
        }

        .boton-cancelar:hover {
            background: #d8e0d8;
        }

        .mensaje {
            padding: 13px 16px;
            margin: 18px 0;
            border-radius: 7px;
            line-height: 1.5;
        }

        .mensaje-ok {
            background: #e0f1e4;
            color: #205d32;
        }

        .mensaje-error {
            background: #fbe6e4;
            color: #8b2923;
        }

        .ayuda {
            margin-top: 8px;
            color: #68736b;
            font-size: 13px;
        }

        .reserva p {
            line-height: 1.5;
            overflow-wrap: anywhere;
        }

        .reserva form {
            margin-top: 15px;
        }

        .reserva form button {
            width: 100%;
        }

        .sin-reservas {
            color: #68736b;
        }

        /* Ventana emergente */

        .modal-fondo {
            position: fixed;
            inset: 0;
            z-index: 1000;
            display: none;
            align-items: center;
            justify-content: center;
            padding: 18px;
            background: rgba(12, 28, 20, .65);
        }

        .modal-fondo.visible {
            display: flex;
        }

        .modal {
            width: 100%;
            max-width: 480px;
            max-height: 90vh;
            overflow-y: auto;
            padding: 28px;
            background: white;
            border-radius: 14px;
            box-shadow: 0 15px 50px #0003;
        }

        .modal h2 {
            margin-top: 0;
            margin-bottom: 8px;
        }

        .modal-descripcion {
            color: #68736b;
            line-height: 1.6;
            font-size: 14px;
        }

        .resumen {
            margin: 22px 0;
            padding: 17px;
            background: #f3f7f2;
            border-radius: 8px;
        }

        .resumen-fila {
            display: flex;
            justify-content: space-between;
            gap: 16px;
            margin: 12px 0;
            line-height: 1.5;
        }

        .resumen-fila span:first-child {
            color: #68736b;
        }

        .resumen-fila span:last-child {
            text-align: right;
            font-weight: bold;
            overflow-wrap: anywhere;
        }

        .resumen-total {
            padding-top: 13px;
            border-top: 1px solid #d8e2d8;
            font-size: 19px;
        }

        .modal-acciones {
            display: flex;
            gap: 10px;
        }

        .modal-acciones button {
            flex: 1;
        }

        @media (max-width: 520px) {
            body {
                padding: 15px;
            }

            .panel, .reserva {
                padding: 18px;
            }

            .modal {
                padding: 22px;
            }

            .modal-acciones {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>
<main>
    <h1>Reservas de Turismo Misiones</h1>
    <p>Administrá tus reservas y consultá las actividades disponibles.</p>

    <a class="volver" href="<?= base_url('/') ?>">← Volver al inicio</a>

    <?php if (session()->getFlashdata('mensaje')): ?>
        <div class="mensaje mensaje-ok" role="status">
            <?= esc(session()->getFlashdata('mensaje')) ?>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
        <div class="mensaje mensaje-error" role="alert">
            <?= esc(session()->getFlashdata('error')) ?>
        </div>
    <?php endif; ?>

    <h2>Crear reserva</h2>

    <form
        id="formReserva"
        class="panel"
        action="<?= base_url('reservas/guardar') ?>"
        method="post"
    >
        <?= csrf_field() ?>

        <label for="usuario_id">ID del usuario existente</label>
        <input
            type="number"
            id="usuario_id"
            name="usuario_id"
            min="1"
            step="1"
            required
        >
        <p class="ayuda">
            Por ahora se utiliza el ID de un usuario registrado en la base de datos.
        </p>

        <label for="actividad_id">Actividad</label>
        <select id="actividad_id" name="actividad_id" required>
            <option value="">Elegí una actividad</option>

            <?php foreach ($actividades as $actividad): ?>
                <option
                    value="<?= esc($actividad['id']) ?>"
                    data-precio="<?= esc($actividad['precios']) ?>"
                    data-cupos="<?= esc($actividad['cupos']) ?>"
                    <?= (int) $actividad['cupos'] < 1 ? 'disabled' : '' ?>
                >
                    <?= esc($actividad['nombre']) ?>
                    - $<?= number_format((float) $actividad['precios'], 2, ',', '.') ?>
                    (<?= (int) $actividad['cupos'] ?> cupos)
                </option>
            <?php endforeach; ?>
        </select>

        <p id="infoCupos" class="ayuda">
            Seleccioná una actividad para consultar los cupos disponibles.
        </p>

        <label for="cantidad">Cantidad de personas</label>
        <input
            type="number"
            id="cantidad"
            name="cantidad"
            min="1"
            step="1"
            value="1"
            required
        >

        <label for="fecha">Fecha y hora</label>
        <input
            type="datetime-local"
            id="fecha"
            name="fecha"
            min="<?= date('Y-m-d\TH:i') ?>"
            required
        >

        <button class="formulario-boton" type="submit">
            Revisar y confirmar reserva
        </button>
    </form>

    <h2>Reservas registradas</h2>

    <?php if (empty($reservas)): ?>
        <p class="sin-reservas">Todavía no hay reservas registradas.</p>
    <?php else: ?>
        <?php foreach ($reservas as $reserva): ?>
            <div class="reserva">
                <h3>Reserva #<?= esc($reserva['id']) ?></h3>

                <p>
                    <strong>Usuario:</strong>
                    <?= esc($reserva['usuario_id']) ?>
                </p>

                <p>
                    <strong>Actividad:</strong>
                    <?php
                    $nombreActividad = 'Actividad #' . $reserva['actividad_id'];

                    foreach ($actividades as $actividad) {
                        if ((int) $actividad['id'] === (int) $reserva['actividad_id']) {
                            $nombreActividad = $actividad['nombre'];
                            break;
                        }
                    }
                    ?>
                    <?= esc($nombreActividad) ?>
                </p>

                <p>
                    <strong>Personas:</strong>
                    <?= esc($reserva['cantidad']) ?>
                </p>

                <p>
                    <strong>Fecha:</strong>
                    <?= esc($reserva['fecha']) ?>
                </p>

                <p>
                    <strong>Total:</strong>
                    $<?= number_format((float) $reserva['total'], 2, ',', '.') ?>
                </p>

                <form
                    action="<?= base_url('reservas/eliminar/' . $reserva['id']) ?>"
                    method="post"
                    onsubmit="return confirm('¿Eliminar esta reserva?');"
                >
                    <?= csrf_field() ?>
                    <button type="submit">Eliminar reserva</button>
                </form>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</main>

<!-- Ventana emergente de confirmación -->
<div
    id="modalFondo"
    class="modal-fondo"
    role="dialog"
    aria-modal="true"
    aria-labelledby="tituloModal"
    aria-hidden="true"
>
    <div class="modal">
        <h2 id="tituloModal">Confirmar reserva</h2>

        <p class="modal-descripcion">
            Revisá los datos antes de confirmar. Si cancelás, no se guardará la reserva.
        </p>

        <div class="resumen">
            <div class="resumen-fila">
                <span>Actividad</span>
                <span id="resumenActividad"></span>
            </div>

            <div class="resumen-fila">
                <span>Usuario</span>
                <span id="resumenUsuario"></span>
            </div>

            <div class="resumen-fila">
                <span>Personas</span>
                <span id="resumenCantidad"></span>
            </div>

            <div class="resumen-fila">
                <span>Fecha y hora</span>
                <span id="resumenFecha"></span>
            </div>

            <div class="resumen-fila">
                <span>Precio por persona</span>
                <span id="resumenPrecio"></span>
            </div>

            <div class="resumen-fila resumen-total">
                <span>Total</span>
                <span id="resumenTotal"></span>
            </div>
        </div>

        <div class="modal-acciones">
            <button type="button" id="cancelarReserva" class="boton-cancelar">
                Cancelar
            </button>

            <button type="button" id="confirmarReserva">
                Confirmar reserva
            </button>
        </div>
    </div>
</div>

<script>
    const formulario = document.getElementById('formReserva');
    const actividadSelect = document.getElementById('actividad_id');
    const cantidadInput = document.getElementById('cantidad');
    const fechaInput = document.getElementById('fecha');
    const infoCupos = document.getElementById('infoCupos');

    const modalFondo = document.getElementById('modalFondo');
    const botonCancelar = document.getElementById('cancelarReserva');
    const botonConfirmar = document.getElementById('confirmarReserva');

    let reservaConfirmada = false;

    function formatoPesos(valor) {
        return new Intl.NumberFormat('es-AR', {
            style: 'currency',
            currency: 'ARS',
            maximumFractionDigits: 2
        }).format(valor);
    }

    function actualizarCupos() {
        const opcion = actividadSelect.selectedOptions[0];

        if (!opcion || !opcion.value) {
            cantidadInput.removeAttribute('max');
            infoCupos.textContent =
                'Seleccioná una actividad para consultar los cupos disponibles.';
            return;
        }

        const cupos = Number(opcion.dataset.cupos);
        cantidadInput.max = String(cupos);

        if (cupos < 1) {
            infoCupos.textContent = 'Esta actividad no tiene cupos disponibles.';
        } else {
            infoCupos.textContent = 'Cupos disponibles: ' + cupos + '.';
        }

        if (Number(cantidadInput.value) > cupos) {
            cantidadInput.value = cupos > 0 ? String(cupos) : '';
        }
    }

    actividadSelect.addEventListener('change', actualizarCupos);

    formulario.addEventListener('submit', function (evento) {
        if (reservaConfirmada) {
            return;
        }

        evento.preventDefault();

        const opcion = actividadSelect.selectedOptions[0];
        const usuario = document.getElementById('usuario_id').value.trim();
        const cantidad = Number(cantidadInput.value);
        const cupos = Number(opcion.dataset.cupos);
        const precio = Number(opcion.dataset.precio);
        const fecha = fechaInput.value;

        if (!opcion.value || !usuario || !fecha || !Number.isInteger(cantidad) || cantidad < 1) {
            alert('Completá todos los datos correctamente.');
            return;
        }

        if (!Number.isInteger(Number(usuario)) || Number(usuario) < 1) {
            alert('Ingresá un ID de usuario válido.');
            return;
        }

        if (cantidad > cupos) {
            alert('No hay cupos suficientes. Disponibles: ' + cupos + '.');
            return;
        }

        if (new Date(fecha) < new Date()) {
            alert('Elegí una fecha y hora futuras.');
            return;
        }

        document.getElementById('resumenActividad').textContent =
            opcion.textContent.trim().replace(/\s+/g, ' ');

        document.getElementById('resumenUsuario').textContent = usuario;
        document.getElementById('resumenCantidad').textContent = cantidad;
        document.getElementById('resumenFecha').textContent =
            new Date(fecha).toLocaleString('es-AR');

        document.getElementById('resumenPrecio').textContent =
            formatoPesos(precio);

        document.getElementById('resumenTotal').textContent =
            formatoPesos(precio * cantidad);

        modalFondo.classList.add('visible');
        modalFondo.setAttribute('aria-hidden', 'false');
        botonCancelar.focus();
    });

    botonCancelar.addEventListener('click', function () {
        modalFondo.classList.remove('visible');
        modalFondo.setAttribute('aria-hidden', 'true');
        reservaConfirmada = false;
    });

    botonConfirmar.addEventListener('click', function () {
        reservaConfirmada = true;
        formulario.requestSubmit();
    });

    modalFondo.addEventListener('click', function (evento) {
        if (evento.target === modalFondo) {
            modalFondo.classList.remove('visible');
            modalFondo.setAttribute('aria-hidden', 'true');
            reservaConfirmada = false;
        }
    });

    actualizarCupos();
</script>

</body>
</html>