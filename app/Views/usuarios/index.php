
<?= $this->include('template/header') ?>

<main class="container my-5">

    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4">
        <div>
            <h2 class="fw-bold mb-1" style="color: #174d3c;">Usuarios registrados</h2>
            <p class="text-muted mb-0">Consulta de usuarios de Turismo Misiones.</p>
        </div>

        <span class="badge bg-success fs-6 mt-3 mt-md-0">
            Total: <?= count($usuarios) ?>
        </span>
    </div>

    <div class="card border-0 shadow-sm rounded-3 overflow-hidden">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">

                <thead style="background-color: #174d3c; color: white;">
                    <tr>
                        <th class="py-3 px-3">ID</th>
                        <th class="py-3">Nombre y apellido</th>
                        <th class="py-3">Correo electrónico</th>
                        <th class="py-3">Rol</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if (!empty($usuarios)): ?>

                        <?php foreach ($usuarios as $usuario): ?>
                            <tr>
                                <td class="px-3"><?= esc($usuario['id']) ?></td>
                                <td class="fw-semibold"><?= esc($usuario['nombre'] . ' ' . $usuario['apellido']) ?></td>
                                <td><?= esc($usuario['email']) ?></td>
                                <td>
                                    <?php if ($usuario['rol'] === 'admin'): ?>
                                        <span class="badge bg-success">Administrador</span>
                                    <?php else: ?>
                                        <span class="badge bg-secondary">Cliente</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    <?php else: ?>

                        <tr>
                            <td colspan="4" class="text-center py-4 text-muted">
                                No hay usuarios registrados.
                            </td>
                        </tr>

                    <?php endif; ?>
                </tbody>

            </table>
        </div>
    </div>

    <div class="mt-4">
        <a href="<?= base_url('/') ?>" class="btn btn-outline-success">
            Volver al inicio
        </a>
    </div>

</main>

<?= $this->include('template/footer') ?>
