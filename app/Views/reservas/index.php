```php
<?= $this->include('template/header') ?>

<style>
    .reservas-contenedor {
        max-width: 1100px;
        margin: 45px auto;
    }

    .reservas-titulo {
        color: #174d3c;
        font-weight: 700;
    }

    .reserva-card {
        background: white;
        border: 1px solid #e1e8e1;
        border-radius: 12px;
        padding: 25px;
        margin-bottom: 20px;
        box-shadow: 0 3px 12px #00000008;
    }

    .reserva-dato {
        color: #68736b;
        font-size: 14px;
        margin-bottom: 5px;
    }

    .reserva-valor {
        color: #26382f;
        font-weight: 600;
        margin-bottom: 18px;
    }

    .reserva-total {
        color: #174d3c;
        font-size: 22px;
        font-weight: 700;
    }

    .reserva-numero {
        color: #174d3c;
        font-weight: 700;
    }

    .sin-reservas {
        background: #f3f7f2;
        border-radius: 12px;
        padding: 40px 20px;
        text-align: center;
    }

    .sin-reservas h3 {
        color: #174d3c;
    }

    .btn-cancelar-reserva {
        background: #fff;
        color: #b02a37;
        border: 1px solid #b02a37;
        padding: 9px 15px;
        border-radius: 6px;
        font-weight: 600;
    }

    .btn-cancelar-reserva:hover {
        background: #b02a37;
        color: white;
    }
</style>

<main class="container reservas-contenedor">

    <div class="mb-4">
        <h2 class="reservas-titulo">Mis Reservas</h2>
        <p class="text-muted">
            Consultá tus actividades reservadas y revisá el historial de tus reservas.
        </p>
    </div>

    <?php if (session()->getFlashdata('mensaje')): ?>
        <div class="alert alert-success">
            <?= esc(session()->getFlashdata('mensaje')) ?>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger">
            <?= esc(session()->getFlashdata('error')) ?>
        </div>
    <?php endif; ?>

    <div class="mb-4">
        <span class="badge bg-success fs-6">
            <?= count($reservas) ?> reservas registradas
        </span>
    </div>

    <?php if (empty($reservas)): ?>

        <div class="sin-reservas">
            <h3>Todavía no tenés reservas</h3>
            <p class="text-muted">
                Cuando reserves una actividad, vas a poder consultarla desde esta sección.
            </p>
            <a href="<?= base_url('actividades') ?>" class="btn btn-success mt-2">
                Explorar actividades
            </a>
        </div>

    <?php else: ?>

        <?php foreach ($reservas as $reserva): ?>

            <?php
            $nombreActividad = 'Actividad #' . $reserva['actividad_id'];

            foreach ($actividades as $actividad) {
                if ((int) $actividad['id'] === (int) $reserva['actividad_id']) {
                    $nombreActividad = $actividad['nombre'];
                    break;
                }
            }

            $fechaReserva = strtotime($reserva['fecha']);
            $hoy = strtotime(date('Y-m-d'));

            if ($fechaReserva < $hoy) {
                $estado = 'Finalizada';
                $colorEstado = 'secondary';
            } elseif ($fechaReserva <= strtotime('+7 days', $hoy)) {
                $estado = 'Próxima';
                $colorEstado = 'success';
            } else {
                $estado = 'Pendiente';
                $colorEstado = 'primary';
            }
            ?>

            <div class="reserva-card">

                <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4">
                    <h5 class="reserva-numero mb-2 mb-md-0">
                        Reserva #<?= esc($reserva['id']) ?>
                    </h5>

                    <span class="badge bg-<?= $colorEstado ?> fs-6">
                        <?= esc($estado) ?>
                    </span>
                </div>

                <h4 class="fw-bold mb-4">
                    <?= esc($nombreActividad) ?>
                </h4>

                <div class="row">

                    <div class="col-md-4">
                        <p class="reserva-dato">Cantidad de personas</p>
                        <p class="reserva-valor">
                            <?= esc($reserva['cantidad']) ?>
                        </p>
                    </div>

                    <div class="col-md-4">
                        <p class="reserva-dato">Fecha y hora</p>
                        <p class="reserva-valor">
                            <?= date('d/m/Y H:i', $fechaReserva) ?>
                        </p>
                    </div>

                    <div class="col-md-4">
                        <p class="reserva-dato">Importe total</p>
                        <p class="reserva-total">
                            $<?= number_format((float) $reserva['total'], 2, ',', '.') ?>
                        </p>
                    </div>

                </div>

                <?php if ($estado !== 'Finalizada'): ?>
                    <form
                        action="<?= base_url('reservas/eliminar/' . $reserva['id']) ?>"
                        method="post"
                        onsubmit="return confirm('¿Estás seguro de que querés cancelar esta reserva?');"
                    >
                        <?= csrf_field() ?>

                        <button type="submit" class="btn-cancelar-reserva">
                            Cancelar reserva
                        </button>
                    </form>
                <?php endif; ?>

            </div>

        <?php endforeach; ?>

    <?php endif; ?>

    <div class="mt-4 mb-5">
        <a href="<?= base_url('actividades') ?>" class="btn btn-outline-success">
            Volver a las actividades
        </a>
    </div>

</main>

<?= $this->include('template/footer') ?>
```