<?php
    $seccion = 'actividades';
    include(APPPATH . 'Views/template/header.php');
?>

<main class="container my-5 px-3 px-md-4" style="max-width: 760px;">

    <!-- card -->
    <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 bg-white">

        <h2 class="display-6 fw-bold mb-1" style="font-family: Georgia, serif; color: #174d3c;">
            Editar actividad
        </h2>
        <p class="text-secondary mb-4 pb-2" style="line-height: 1.6;">
            Modificá los datos de la actividad en el catálogo.
        </p>

<<<<<<< HEAD
        <!-- form -->
        <form action="<?= site_url('actividades/actualizar/' . $actividad['id']) ?>" method="POST" enctype="multipart/form-data">
            <?= csrf_field() ?>
=======
    <form action="<?= base_url('actividades/actualizar/' . $actividad['id']) ?>"
          method="post"
          enctype="multipart/form-data"
          class="bg-white p-4 p-md-5 border rounded-3 shadow-sm"
          style="border-color: #e3e9e2 !important;">
>>>>>>> 3d73ad5 (modificacion de fecha y cupos)

            <!-- nombre de la actividad -->
            <div class="mb-3">
                <label for="nombre" class="form-label fw-bold small" style="color: #30473a;">
                    Nombre de la actividad
                </label>
<<<<<<< HEAD
                <input 
                    type="text" 
                    class="form-control py-2" 
                    id="nombre" 
                    name="nombre" 
                    value="<?= esc($actividad['nombre']) ?>" 
                    required
                >
=======
                <input type="text" class="form-control py-2" id="nombre" name="nombre" value="<?= esc($actividad['nombre']) ?>" required>
>>>>>>> 3d73ad5 (modificacion de fecha y cupos)
            </div>

            <!-- categoría de la actividad -->
            <div class="mb-3">
                <label for="tipo" class="form-label fw-bold small" style="color: #30473a;">
                    Categoría de la actividad
                </label>
<<<<<<< HEAD
                <select class="form-select py-2" id="tipo" name="tipo" required>
                    <?php 
                    $categorias = [
                        'Naturaleza y Senderismo',
                        'Aventura y Deportes Náuticos',
                        'Saltos y Cascadas',
                        'Gastronomía y Sabores Locales',
                        'Cultura e Historia',
                        'Paseos Familiares y Relax'
                    ];
                    $categoriaActual = $actividad['tipo'] ?? $actividad['categoria'] ?? '';
                    foreach ($categorias as $catOption): 
                    ?>
                        <option value="<?= $catOption ?>" <?= ($categoriaActual === $catOption) ? 'selected' : '' ?>>
                            <?= $catOption ?>
                        </option>
                    <?php endforeach; ?>
                </select>
=======
                <input type="text" class="form-control py-2" id="categoria" name="categoria" value="<?= esc($actividad['categoria']) ?>" required>
>>>>>>> 3d73ad5 (modificacion de fecha y cupos)
            </div>

            <!-- ubicación -->
            <div class="mb-3">
                <label for="ubicacion" class="form-label fw-bold small" style="color: #30473a;">
                    Ubicación
                </label>
<<<<<<< HEAD
                <input 
                    type="text" 
                    class="form-control py-2" 
                    id="ubicacion" 
                    name="ubicacion" 
                    value="<?= esc($actividad['ubicacion']) ?>" 
                    required
                >
            </div>

            <!-- div precios y cupos -->
            <div class="row g-3 mb-3">
                <div class="col-md-6">
                    <label for="precios" class="form-label fw-bold small" style="color: #30473a;">
                        Precio por persona ($)
                    </label>
                    <input 
                        type="number" 
                        class="form-control py-2" 
                        id="precios" 
                        name="precios" 
                        min="0" 
                        step="0.01" 
                        value="<?= esc($actividad['precios'] ?? $actividad['precio'] ?? 0) ?>" 
                        required
                    >
                </div>
                <div class="col-md-6">
                    <label for="cupos" class="form-label fw-bold small" style="color: #30473a;">
                        Cupos disponibles
                    </label>
                    <input 
                        type="number" 
                        class="form-control py-2" 
                        id="cupos" 
                        name="cupos" 
                        min= "<?= esc($actividad['cupos']) ?>"
                        step="1" 
                        value="<?= esc($actividad['cupos'] ?? 0) ?>" 
                        required
                    >
=======
                <input type="text" class="form-control py-2" id="ubicacion" name="ubicacion" value="<?= esc($actividad['ubicacion']) ?>" required>
            </div>

            <div class="col-md-6">
                <label for="temporada" class="form-label fw-bold small" style="color: #344b3c;">
                    Temporada
                </label>
                <input type="text" class="form-control py-2" id="temporada" name="temporada" value="<?= esc($actividad['temporada']) ?>">
            </div>

            <div class="col-md-6">
                <label for="fecha_salida" class="form-label fw-bold small" style="color: #344b3c;">
                    Fecha de la actividad
                </label>
                <input type="date"
                       class="form-control py-2"
                       id="fecha_salida"
                       name="fecha_salida"
                       min="<?= date('Y-m-d') ?>"
                       value="<?= esc($actividad['fecha_salida'] ?? '') ?>"
                       required>
            </div>

            <div class="col-md-6">
                <label for="hora_salida" class="form-label fw-bold small" style="color: #344b3c;">
                    Horario de la actividad
                </label>
                <input type="time"
                       class="form-control py-2"
                       id="hora_salida"
                       name="hora_salida"
                       value="<?= esc($actividad['hora_salida'] ?? '') ?>"
                       required>
            </div>

            <div class="col-md-6">
                <label for="cupos" class="form-label fw-bold small" style="color: #344b3c;">
                    Cupos disponibles
                </label>
                <input type="number" class="form-control py-2" id="cupos" name="cupos" min="0" value="<?= esc($actividad['cupos']) ?>" required>
            </div>

            <div class="col-md-6">
                <label for="precios" class="form-label fw-bold small" style="color: #344b3c;">
                    Precio por persona
                </label>
                <input type="number" class="form-control py-2" id="precios" name="precios" min="0" step="0.01" value="<?= esc($actividad['precios']) ?>" required>
            </div>

            <div class="col-12">
                <label for="imagen" class="form-label fw-bold small" style="color: #344b3c;">
                    Imagen de la actividad
                </label>

                <?php if (!empty($actividad['imagen'])): ?>
                    <div class="mb-2">
                        <img src="<?= base_url('img/' . $actividad['imagen']) ?>"
                             alt="Imagen actual"
                             class="img-thumbnail rounded"
                             style="max-height: 150px; object-fit: cover;">
                    </div>
                <?php endif; ?>

                <input type="file" class="form-control" id="imagen" name="imagen">
                <div class="form-text small" style="color: #818c83;">
                    Elegí una foto nueva solo si querés cambiar la actual. Máximo 2 MB.
>>>>>>> 3d73ad5 (modificacion de fecha y cupos)
                </div>
            </div>

            <!-- temporada recomendada -->
            <div class="mb-3">
                <label for="temporada" class="form-label fw-bold small" style="color: #30473a;">
                    Temporada recomendada
                </label>
<<<<<<< HEAD
                <select class="form-select py-2" id="temporada" name="temporada" required>
                    <?php 
                    $temporadas = ['Verano', 'Otoño', 'Invierno', 'Primavera', 'Todo el año'];
                    $temporadaActual = $actividad['temporada'] ?? 'Todo el año';
                    foreach ($temporadas as $tempOption): 
                    ?>
                        <option value="<?= $tempOption ?>" <?= ($temporadaActual === $tempOption) ? 'selected' : '' ?>>
                            <?= $tempOption ?>
                        </option>
                    <?php endforeach; ?>
                </select>
=======
                <textarea class="form-control" id="descripcion" name="descripcion" rows="4" required><?= esc($actividad['descripcion']) ?></textarea>
>>>>>>> 3d73ad5 (modificacion de fecha y cupos)
            </div>

            <!-- imagen -->
            <div class="mb-3">
                <label for="imagen" class="form-label fw-bold small" style="color: #30473a;">
                    Imagen de la actividad
                </label>

                <!-- imagen actual si existe -->
                <?php if (!empty($actividad['imagen']) && file_exists(FCPATH . 'img/actividades/' . $actividad['imagen'])): ?>
                    <div class="mb-2 d-flex align-items-center gap-3 p-2 bg-light rounded-3 border">
                        <img 
                            src="<?= base_url('img/actividades/' . $actividad['imagen']) ?>" 
                            alt="Imagen actual" 
                            class="rounded-2 object-fit-cover" 
                            style="width: 70px; height: 50px;"
                        >
                        <span class="small text-secondary">
                            Imagen actual: <strong><?= esc($actividad['imagen']) ?></strong>
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

            <!-- descripción -->
            <div class="mb-4">
                <label for="descripcion" class="form-label fw-bold small" style="color: #30473a;">
                    Descripción
                </label>
                <textarea 
                    class="form-control" 
                    id="descripcion" 
                    name="descripcion" 
                    rows="4"
                ><?= esc($actividad['descripcion'] ?? '') ?></textarea>
            </div>

            <!-- buttons -->
            <div class="d-flex gap-2 pt-2">
                <button type="submit" class="btn text-white fw-bold px-4 py-2 rounded-3" style="background-color: #286b46;">
                    Guardar cambios
                </button>
                <a href="<?= site_url('actividades') ?>" class="btn btn-light text-dark fw-bold px-4 py-2 rounded-3 border">
                    Cancelar
                </a>
            </div>

        </form>

    </div>

</main>

<?php
    include(APPPATH . 'Views/template/footer.php');
?>