<?php
    $seccion = 'actividades';
    include(APPPATH . 'Views/template/header.php');
?>

<main class="container my-5 px-3 px-md-4" style="max-width: 760px;">

    <!-- tarheta del form -->
    <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 bg-white">

        <h2 class="display-6 fw-bold mb-1" style="font-family: Georgia, serif; color: #174d3c;">
            Editar alojamiento
        </h2>
        <p class="text-secondary mb-4 pb-2" style="line-height: 1.6;">
            Modificá los datos del alojamiento en el catálogo.
        </p>

        <!-- form -->
        <form action="<?= site_url('alojamientos/actualizar/' . $alojamiento['id']) ?>" method="POST" enctype="multipart/form-data">
            <?= csrf_field() ?>

            <!-- nombre del alojamiento -->
            <div class="mb-3">
                <label for="nombre" class="form-label fw-bold small" style="color: #30473a;">
                    Nombre del alojamiento
                </label>
                <input 
                    type="text" 
                    class="form-control py-2" 
                    id="nombre" 
                    name="nombre" 
                    value="<?= esc($alojamiento['nombre']) ?>" 
                    required
                >
            </div>

            <!-- tipo de alojamiento -->
            <div class="mb-3">
                <label for="tipo" class="form-label fw-bold small" style="color: #30473a;">
                    Tipo de alojamiento
                </label>
                <select class="form-select py-2" id="tipo" name="tipo" required>
                    <?php 
                    $tipos = ['Hotel', 'Cabaña', 'Hostería', 'Hostel', 'Apart hotel', 'Camping'];
                    foreach ($tipos as $tipoOption): 
                    ?>
                        <option value="<?= $tipoOption ?>" <?= ($alojamiento['tipo'] === $tipoOption) ? 'selected' : '' ?>>
                            <?= $tipoOption ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- ubicacion -->
            <div class="mb-3">
                <label for="ubicacion" class="form-label fw-bold small" style="color: #30473a;">
                    Ubicación
                </label>
                <input 
                    type="text" 
                    class="form-control py-2" 
                    id="ubicacion" 
                    name="ubicacion" 
                    value="<?= esc($alojamiento['ubicacion']) ?>" 
                    required
                >
            </div>

            <!-- precio -->
            <div class="mb-3">
                <label for="precios" class="form-label fw-bold small" style="color: #30473a;">
                    Precio por noche ($)
                </label>
                <input 
                    type="number" 
                    class="form-control py-2" 
                    id="precios" 
                    name="precios" 
                    min="0" 
                    step="0.01" 
                    value="<?= esc($alojamiento['precios']) ?>" 
                    required
                >
            </div>

            <!-- imagen -->
            <div class="mb-3">
                <label for="imagen" class="form-label fw-bold small" style="color: #30473a;">
                    Imagen del alojamiento
                </label>

                <!-- Muestra vista previa si ya existe una imagen -->
                <?php if (!empty($alojamiento['imagen']) && file_exists(FCPATH . 'img/alojamientos/' . $alojamiento['imagen'])): ?>
                    <div class="mb-2 d-flex align-items-center gap-3 p-2 bg-light rounded-3 border">
                        <img 
                            src="<?= base_url('img/alojamientos/' . $alojamiento['imagen']) ?>" 
                            alt="Imagen actual" 
                            class="rounded-2 object-fit-cover" 
                            style="width: 70px; height: 50px;"
                        >
                        <span class="small text-secondary">
                            Imagen actual: <strong><?= esc($alojamiento['imagen']) ?></strong>
                        </span>
                    </div>
                <?php endif; ?>

                <input 
                    type="file" 
                    class="form-control py-2" 
                    id="imagen" 
                    name="imagen" 
                    accept="image/*"
                >
                <div class="form-text small text-secondary">
                    Dejá este campo vacío si no querés cambiar la imagen actual.
                </div>
            </div>

            <!-- descripcion -->
            <div class="mb-4">
                <label for="descripcion" class="form-label fw-bold small" style="color: #30473a;">
                    Descripción
                </label>
                <textarea 
                    class="form-control" 
                    id="descripcion" 
                    name="descripcion" 
                    rows="4"
                ><?= esc($alojamiento['descripcion'] ?? '') ?></textarea>
            </div>

            <!-- buttons -->
            <div class="d-flex gap-2 pt-2">
                <button type="submit" class="btn text-white fw-bold px-4 py-2 rounded-3" style="background-color: #286b46;">
                    Guardar cambios
                </button>
                <a href="<?= site_url('alojamientos') ?>" class="btn btn-light text-dark fw-bold px-4 py-2 rounded-3 border">
                    Cancelar
                </a>
            </div>

        </form>

    </div>

</main>

<?php
    include(APPPATH . 'Views/template/footer.php');
?>