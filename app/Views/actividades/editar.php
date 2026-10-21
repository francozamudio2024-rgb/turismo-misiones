<?php
    $seccion = 'actividades';
    include("template/header.php");
?>

<main class="container my-5 px-3 px-md-4" style="max-width: 850px;">

    <!-- ENCABEZADO -->
    <div class="mb-4">
        <span class="text-uppercase fw-bold small tracking-wider" style="color: #43805f; letter-spacing: 2px;">
            Gestión de actividades
        </span>
        <h1 class="fw-bold my-2" style="color: #174d3c; font-size: clamp(30px, 5vw, 42px);">
            Editar actividad
        </h1>
        <p class="text-secondary mb-0">
            Actualizá la información del destino o la experiencia turística.
        </p>
    </div>

    <!-- FORMULARIO -->
    <form action="<?= base_url('actividades/actualizar/' . $actividad['id']) ?>" 
          method="post" 
          class="bg-white p-4 p-md-5 border rounded-3 shadow-sm" 
          style="border-color: #e3e9e2 !important;">

        <?= csrf_field() ?>

        <div class="row g-3">

            <div class="col-md-6">
                <label for="nombre" class="form-label fw-bold small" style="color: #344b3c;">
                    Nombre de la actividad
                </label>
                <input type="text" 
                       class="form-control py-2" 
                       id="nombre" 
                       name="nombre" 
                       value="<?= esc($actividad['nombre']) ?>" 
                       required>
            </div>

            <div class="col-md-6">
                <label for="categoria" class="form-label fw-bold small" style="color: #344b3c;">
                    Categoría
                </label>
                <input type="text" 
                       class="form-control py-2" 
                       id="categoria" 
                       name="categoria" 
                       value="<?= esc($actividad['categoria']) ?>" 
                       required>
            </div>

            <div class="col-md-6">
                <label for="ubicacion" class="form-label fw-bold small" style="color: #344b3c;">
                    Ubicación
                </label>
                <input type="text" 
                       class="form-control py-2" 
                       id="ubicacion" 
                       name="ubicacion" 
                       value="<?= esc($actividad['ubicacion']) ?>" 
                       required>
            </div>

            <div class="col-md-6">
                <label for="temporada" class="form-label fw-bold small" style="color: #344b3c;">
                    Temporada
                </label>
                <input type="text" 
                       class="form-control py-2" 
                       id="temporada" 
                       name="temporada" 
                       value="<?= esc($actividad['temporada']) ?>">
            </div>

            <div class="col-md-6">
                <label for="cupos" class="form-label fw-bold small" style="color: #344b3c;">
                    Cupos disponibles
                </label>
                <input type="number" 
                       class="form-control py-2" 
                       id="cupos" 
                       name="cupos" 
                       min="0" 
                       value="<?= esc($actividad['cupos']) ?>" 
                       required>
            </div>

            <div class="col-md-6">
                <label for="precios" class="form-label fw-bold small" style="color: #344b3c;">
                    Precio por persona
                </label>
                <input type="number" 
                       class="form-control py-2" 
                       id="precios" 
                       name="precios" 
                       min="0" 
                       step="0.01" 
                       value="<?= esc($actividad['precios']) ?>" 
                       required>
            </div>

            <div class="col-12">
                <label for="imagen" class="form-label fw-bold small" style="color: #344b3c;">
                    Imagen
                </label>
                <input type="text" 
                       class="form-control py-2" 
                       id="imagen" 
                       name="imagen" 
                       value="<?= esc($actividad['imagen']) ?>">
                <div class="form-text small" style="color: #818c83;">
                    Ingresá el nombre del archivo de imagen, por ejemplo: cataratas.jpg
                </div>
            </div>

            <div class="col-12">
                <label for="descripcion" class="form-label fw-bold small" style="color: #344b3c;">
                    Descripción
                </label>
                <textarea class="form-control" 
                          id="descripcion" 
                          name="descripcion" 
                          rows="4" 
                          required><?= esc($actividad['descripcion']) ?></textarea>
            </div>

        </div>

        <div class="d-flex flex-column flex-sm-row align-items-center gap-2 mt-4 pt-3 border-top">
            <button type="submit" class="btn text-white fw-bold px-4 py-2 w-100 w-sm-auto" style="background-color: #28744f;">
                Guardar cambios
            </button>

            <a href="<?= base_url('actividades') ?>" class="btn border fw-bold px-4 py-2 w-100 w-sm-auto bg-white" style="color: #435548; border-color: #dce4dc !important;">
                Cancelar
            </a>
        </div>

    </form>

</main>

<?php
    include("template/footer.php");
?>