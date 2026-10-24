<?php
    $seccion = 'actividades';
    include("template/header.php");
?>

<main class="container my-5 px-3 px-md-4" style="max-width: 760px;">

    <div class="mb-4">
        <h2 class="fw-bold mb-2" style="color: #174d3c; font-size: 30px;">Agregar actividad</h2>
        <p class="text-secondary mb-0" style="line-height: 1.6;">
            Completá los datos para incorporar una nueva propuesta turística al listado.
        </p>
    </div>

    <form
        class="formulario"
        action="<?= base_url('actividades/guardar') ?>"
        method="post"
    >

        <?= csrf_field() ?>

        <div class="mb-3">
            <label for="nombre" class="form-label fw-bold small" style="color: #30473a;">Nombre de la actividad</label>
            <input type="text" class="form-control py-2" id="nombre" name="nombre" required>
        </div>

        <div class="mb-3">
            <label for="categoria" class="form-label fw-bold small" style="color: #30473a;">Categoría</label>
            <input type="text" class="form-control py-2" id="categoria" name="categoria" required>
        </div>

        <div class="mb-3">
            <label for="ubicacion" class="form-label fw-bold small" style="color: #30473a;">Ubicación</label>
            <input type="text" class="form-control py-2" id="ubicacion" name="ubicacion" required>
        </div>

        <div class="mb-3">
            <label for="cupos" class="form-label fw-bold small" style="color: #30473a;">Cupos disponibles</label>
            <input type="number" class="form-control py-2" id="cupos" name="cupos" min="0" required>
        </div>

        <div class="mb-3">
            <label for="precios" class="form-label fw-bold small" style="color: #30473a;">Precio</label>
            <input type="number" class="form-control py-2" id="precios" name="precios" min="0" step="0.01" required>
        </div>

        <div class="mb-3">
            <label for="imagen" class="form-label fw-bold small" style="color: #30473a;">Nombre del archivo de imagen</label>
            <input type="text" class="form-control py-2" id="imagen" name="imagen" placeholder="Ejemplo: cataratas.jpg">
        </div>

        <div class="mb-3">
            <label for="temporada" class="form-label fw-bold small" style="color: #30473a;">Temporada</label>
            <input type="text" class="form-control py-2" id="temporada" name="temporada">
        </div>

        <div class="mb-4">
            <label for="descripcion" class="form-label fw-bold small" style="color: #30473a;">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="4" required></textarea>
        </div>

        <div class="d-flex flex-column flex-sm-row gap-2 pt-2">
            <button type="submit" class="btn text-white fw-bold px-4 py-2" style="background-color: #174d3c;">
                Guardar actividad
            </button>

            <a class="btn fw-bold px-4 py-2" style="background-color: #e7ece8; color: #30473a;" href="<?= base_url('actividades') ?>">
                Cancelar
            </a>
        </div>

    </form>

</main>

<?php
    include("template/footer.php");
?>