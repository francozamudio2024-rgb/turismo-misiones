<?php
    $seccion = 'perfil';
    include("template/header.php");
?>

<main class="container my-5 px-3 px-md-4" style="max-width: 850px;">

    <div class="mb-4 text-center">
        <span class="text-uppercase fw-bold small tracking-wider" style="color: #43805f; letter-spacing: 2px;">
            Mi Cuenta
        </span>
        <h1 class="fw-bold my-2" style="color: #174d3c; font-size: clamp(30px, 5vw, 42px);">
            Perfil de Usuario
        </h1>
        <p class="text-secondary mb-0">
            Consultá la información de tu cuenta y tus datos registrados.
        </p>
    </div>

    <div class="bg-white p-4 p-md-5 border rounded-3 shadow-sm" style="border-color: #e3e9e2 !important;">
        
        <div class="text-center mb-4 pb-3 border-bottom">
            <h3 class="fw-bold mb-0" style="color: #174d3c;">
                <?= esc(session()->get('nombre') ?? 'Usuario') ?> <?= esc(session()->get('apellido') ?? '') ?>
            </h3>

            <?php if (session()->get('rol') === 'admin'): ?> <!-- se enseña el rol si es admin-->
                <span class="badge rounded-pill mt-2" style="background-color: #174d3c;">
                    Administrador
                </span>
            <?php endif; ?>
        </div>

        <div class="row g-3">
            <div class="col-md-6 text-center text-md-start">
                <label class="form-label fw-bold small text-muted">Nombre</label>
                <p class="form-control-plaintext border-bottom pb-2">
                    <?= esc(session()->get('nombre') ?? 'No disponible') ?>
                </p>
            </div>

            <div class="col-md-6 text-center text-md-start">
                <label class="form-label fw-bold small text-muted">Apellido</label>
                <p class="form-control-plaintext border-bottom pb-2">
                    <?= esc(session()->get('apellido') ?? 'No disponible') ?>
                </p>
            </div>

            <div class="col-12 text-center text-md-start">
                <label class="form-label fw-bold small text-muted">Correo electrónico</label>
                <p class="form-control-plaintext border-bottom pb-2">
                    <?= esc(session()->get('email') ?? 'No disponible') ?>
                </p>
            </div>
        </div>

        <div class="mt-4 pt-3 d-flex justify-content-center">
            <a href="<?= base_url('logout') ?>" class="btn border fw-bold px-4 py-2 text-danger bg-white" style="border-color: #f5c2c7 !important;">
                Cerrar sesión
            </a>
        </div>

    </div>

</main>

<?php
    include("template/footer.php");
?>