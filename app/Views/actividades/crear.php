<?php
    $seccion = 'actividades';
    include(APPPATH . 'Views/template/header.php');
?>

<main class="container my-5 px-3 px-md-4" style="max-width: 760px;">

    <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 bg-white">

        <h2 class="display-6 fw-bold mb-1" style="font-family: Georgia, serif; color: #174d3c;">
            Agregar actividad
        </h2>
        <p class="text-secondary mb-4 pb-2" style="line-height: 1.6;">
            Completá los datos de la experiencia que querés incorporar al catálogo.
        </p>

<<<<<<< HEAD
        <!-- form -->
        <form action="<?= site_url('actividades/guardar') ?>" method="POST" enctype="multipart/form-data">
            <?= csrf_field() ?>
=======
    <form action="<?= base_url('actividades/guardar') ?>"
          method="post"
          enctype="multipart/form-data"
          class="bg-white p-4 p-md-5 border rounded-3 shadow-sm"
          style="border-color: #e3e9e2 !important;">
>>>>>>> 3d73ad5 (modificacion de fecha y cupos)

            <!-- nombre -->
            <div class="mb-3">
                <label for="nombre" class="form-label fw-bold small" style="color: #30473a;">
                    Nombre de la actividad
                </label>
<<<<<<< HEAD
                <input type="text" class="form-control py-2" id="nombre" name="nombre" placeholder="Ej. Senderismo en Parque M aristocratic" required>
=======
                <input type="text" class="form-control py-2" id="nombre" name="nombre" value="<?= old('nombre') ?>" required>
>>>>>>> 3d73ad5 (modificacion de fecha y cupos)
            </div>

            <!-- categoría  -->
            <div class="mb-3">
                <label for="tipo" class="form-label fw-bold small" style="color: #30473a;">
                    Categoría de la actividad
                </label>
<<<<<<< HEAD
                <select class="form-select py-2" id="tipo" name="tipo" required>
                    <option value="" selected disabled>Seleccioná una opción</option>
                    <option value="Naturaleza y Senderismo">Naturaleza y Senderismo</option>
                    <option value="Aventura y Deportes Náuticos">Aventura y Deportes Náuticos</option>
                    <option value="Saltos y Cascadas">Saltos y Cascadas</option>
                    <option value="Gastronomía y Sabores Locales">Gastronomía y Sabores Locales</option>
                    <option value="Cultura e Historia">Cultura e Historia</option>
                    <option value="Paseos Familiares y Relax">Paseos Familiares y Relax</option>
                </select>
=======
                <input type="text" class="form-control py-2" id="categoria" name="categoria" value="<?= old('categoria') ?>" required>
>>>>>>> 3d73ad5 (modificacion de fecha y cupos)
            </div>

            <!-- ubicación -->
            <div class="mb-3">
                <label for="ubicacion" class="form-label fw-bold small" style="color: #30473a;">
                    Ubicación
                </label>
<<<<<<< HEAD
                <input type="text" class="form-control py-2" id="ubicacion" name="ubicacion" placeholder="Ej. Puerto Iguazú, Misiones" required>
            </div>

            <!-- div precio y cupos -->
            <div class="row g-3 mb-3">
                <div class="col-md-6">
                    <label for="precios" class="form-label fw-bold small" style="color: #30473a;">
                        Precio por persona ($)
                    </label>
                    <input type="number" class="form-control py-2" id="precios" name="precios" min="0" step="0.01" oninput="if(this.value < 0) this.value = 0;" required>
                </div>
                <div class="col-md-6">
                    <label for="cupos" class="form-label fw-bold small" style="color: #30473a;">
                        Cupos disponibles
                    </label>
                    <input type="number" class="form-control py-2" id="cupos" name="cupos" min="0" step="1" oninput="if(this.value < 0) this.value = 0;" required>
=======
                <input type="text" class="form-control py-2" id="ubicacion" name="ubicacion" value="<?= old('ubicacion') ?>" required>
            </div>

            <div class="col-md-6">
                <label for="temporada" class="form-label fw-bold small" style="color: #344b3c;">
                    Temporada
                </label>
                <input type="text" class="form-control py-2" id="temporada" name="temporada" value="<?= old('temporada') ?>">
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
                       value="<?= old('fecha_salida') ?>"
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
                       value="<?= old('hora_salida') ?>"
                       required>
            </div>

            <div class="col-md-6">
                <label for="cupos" class="form-label fw-bold small" style="color: #344b3c;">
                    Cupos disponibles
                </label>
                <input type="number" class="form-control py-2" id="cupos" name="cupos" min="0" oninput="if(this.value < 0) this.value = 0;" value="<?= old('cupos') ?>" required>
            </div>

            <div class="col-md-6">
                <label for="precios" class="form-label fw-bold small" style="color: #344b3c;">
                    Precio por persona
                </label>
                <input type="number" class="form-control py-2" id="precios" name="precios" min="0" step="0.01" oninput="if(this.value < 0) this.value = 0;" value="<?= old('precios') ?>" required>
            </div>

            <div class="col-12">
                <label for="imagen" class="form-label fw-bold small" style="color: #344b3c;">
                    Imagen de la actividad
                </label>
                <input type="file" class="form-control" id="imagen" name="imagen">
                <div class="form-text small" style="color: #818c83;">
                    Si no seleccionás una imagen, se utilizará una imagen predeterminada. Formatos: JPG, PNG o WEBP. Máximo 2 MB.
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
                    <option value="Todo el año" selected>Todo el año</option>
                    <option value="Verano">Verano</option>
                    <option value="Otoño">Otoño</option>
                    <option value="Invierno">Invierno</option>
                    <option value="Primavera">Primavera</option>
                </select>
=======
                <textarea class="form-control" id="descripcion" name="descripcion" rows="4" required><?= old('descripcion') ?></textarea>
>>>>>>> 3d73ad5 (modificacion de fecha y cupos)
            </div>

            <!-- Imagen -->
            <div class="mb-3">
                <label for="imagen" class="form-label fw-bold small" style="color: #30473a;">
                    Imagen de la actividad
                </label>
                <input 
                    type="file" 
                    class="form-control py-2" 
                    id="imagen" 
                    name="imagen" 
                    accept="image/*"
                >
            </div>

            <!-- descripción -->
            <div class="mb-4">
                <label for="descripcion" class="form-label fw-bold small" style="color: #30473a;">
                    Descripción
                </label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="4" placeholder="Describí la actividad y las recomendaciones para los visitantes"></textarea>
            </div>

            <!-- botones -->
            <div class="d-flex gap-2 pt-2">
                <button type="submit" class="btn text-white fw-bold px-4 py-2 rounded-3" style="background-color: #286b46;">
                    Guardar actividad
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