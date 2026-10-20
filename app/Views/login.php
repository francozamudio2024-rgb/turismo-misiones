<?php
    include("template/header.php");
?>

<section class="container py-5 d-flex align-items-center justify-content-center" style="min-height: 75vh;">
    <div class="row justify-content-center w-100">
        <div class="col-md-8 col-lg-5">
            <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                
                <!-- Encabezado de la Tarjeta -->
                <div class="bg-verde-misiones text-white text-center py-4 px-3">
                    <h2 class="h4 fw-bold mb-1">¡Bienvenido a Misiones!</h2>
                    <p class="small text-white-50 mb-0">Ingresá tu cuenta para gestionar tus reservas y actividades</p>
                </div>

                <div class="card-body p-4 p-sm-5">

                    <!-- Formulario de Login (Solo Estructura Visual) -->
                    <form action="#" method="POST">

                        <!-- Campo Email -->
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

                        <!-- Campo Contraseña -->
                        <div class="mb-4">
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <label for="password" class="form-label fw-bold text-secondary small mb-0">Contraseña</label>
                                <a href="#" class="small text-decoration-none text-muted">¿Olvidaste tu contraseña?</a>
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

                        <!-- Recordar Sesión -->
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember">
                            <label class="form-check-label small text-secondary" for="remember">
                                Recordar mi sesión
                            </label>
                        </div>

                        <!-- Botón Submit -->
                        <button type="submit" class="btn btn-success w-100 py-2 fw-bold text-white shadow-sm mb-3">
                            Iniciar Sesión
                        </button>

                    </form>

                    <hr class="my-4 text-muted opacity-25">

                    <!-- Enlace a Registro -->
                    <div class="text-center">
                        <p class="small text-secondary mb-0">
                            ¿Aún no tenés una cuenta? 
                            <a href="<?= base_url('registro') ?>" class="fw-bold text-verde-misiones text-decoration-none ms-1">
                                Registrate gratis
                            </a>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php
    include("template/footer.php");
?>