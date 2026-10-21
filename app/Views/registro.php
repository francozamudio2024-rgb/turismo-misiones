<?php
    include("template/header.php");
?>

<section class="container py-5 d-flex align-items-center justify-content-center" style="min-height: 75vh;">
    <div class="row justify-content-center w-100">
        <div class="col-md-8 col-lg-5">
            <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                
                <!-- Encabezado del login -->
                <div class="bg-verde-misiones text-white text-center py-4 px-3" style="background-color: #006837;">
                    <h2 class="h4 fw-bold mb-1">¡Bienvenido a Misiones!</h2>
                    <p class="small text-white-50 mb-0">Crea tu cuenta para gestionar tus reservas y actividades</p>
                </div>

                <div class="card-body p-4 p-sm-5">

                    <!-- form post -->
                    <form action="<?= base_url('registro/guardar') ?>" method="POST">
                        <?= csrf_field() ?>

                        <!-- email -->
                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold text-secondary small">Correo Electrónico</label>
                            <div class="input-group">
                                <input type="email" 
                                       name="email" 
                                       id="email" 
                                       class="form-control border-start-0 bg-light" 
                                       placeholder="nombre@ejemplo.com" 
                                       required 
                                       autofocus>
                            </div>
                        </div>

                        <!-- Nombre -->
                        <div class="mb-3">
                            <label for="nombre" class="form-label fw-bold text-secondary small">Nombre</label>
                            <div class="input-group">
                                <input type="text" 
                                       name="nombre" 
                                       id="nombre" 
                                       class="form-control border-start-0 bg-light" 
                                       placeholder="Nombre" 
                                       required>
                            </div>
                        </div>

                        <!-- Apellido -->
                        <div class="mb-3">
                            <label for="apellido" class="form-label fw-bold text-secondary small">Apellido</label>
                            <div class="input-group">
                                <input type="text" 
                                       name="apellido" 
                                       id="apellido" 
                                       class="form-control border-start-0 bg-light" 
                                       placeholder="Apellido" 
                                       required>
                            </div>
                        </div>

                        <!-- Campo Contraseña -->
                        <div class="mb-4">
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <label for="password" class="form-label fw-bold text-secondary small mb-0">Contraseña</label>
                            </div>
                            <div class="input-group">
                                <input type="password" 
                                       name="password" 
                                       id="password" 
                                       class="form-control border-start-0 bg-light" 
                                       placeholder="••••••••" 
                                       required>
                            </div>
                        </div>

                        <!-- Repetir Contraseña -->
                        <div class="mb-4">
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <label for="pass_confirm" class="form-label fw-bold text-secondary small mb-0">Repetir contraseña</label>
                            </div>
                            <div class="input-group">
                                <input type="password" 
                                       name="pass_confirm" 
                                       id="pass_confirm" 
                                       class="form-control border-start-0 bg-light" 
                                       placeholder="••••••••" 
                                       required>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-success w-100 py-2 fw-bold text-white shadow-sm mb-3" style="background-color: #006837; border-color: #006837;">
                            Registrarse
                        </button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</section>

<?php
    include("template/footer.php");
?>