<?php
    $seccion = 'alojamientos';
    include(APPPATH . 'Views/template/header.php');
?>

<main class="container my-5 px-3 px-md-4" style="max-width: 760px;">

    <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 bg-white">

        <h2 class="display-6 fw-bold mb-1" style="font-family: Georgia, serif; color: #174d3c;">
            Agregar alojamiento
        </h2>
        <p class="text-secondary mb-4 pb-2" style="line-height: 1.6;">
            Completá los datos del lugar que querés incorporar al catálogo.
        </p>

        <!-- form -->
        <form action="<?= site_url('alojamientos/guardar') ?>" method="POST" enctype="multipart/form-data">
            <?= csrf_field() ?>

            <!-- nombre -->
            <div class="mb-3">
                <label for="nombre" class="form-label fw-bold small" style="color: #30473a;">
                    Nombre del alojamiento
                </label>
                <input type="text" class="form-control py-2" id="nombre" name="nombre" required>
            </div>

            <!-- categoría  -->
            <div class="mb-3">
                <label for="tipo" class="form-label fw-bold small" style="color: #30473a;">
                    Tipo de alojamiento
                </label>
                <select class="form-select py-2" id="tipo" name="tipo" required>
                    <option value="" selected disabled>Seleccioná una opción</option>
                    <option value="Hotel">Hotel</option>
                    <option value="Cabaña">Cabaña</option>
                    <option value="Hostería">Hostería</option>
                    <option value="Hostel">Hostel</option>
                    <option value="Apart hotel">Apart hotel</option>
                    <option value="Camping">Camping</option>
                </select>
            </div>

            <!-- ubicacion -->
            <div class="mb-3">
                <label for="ubicacion" class="form-label fw-bold small" style="color: #30473a;">
                    Ubicación
                </label>
                <input type="text" class="form-control py-2" id="ubicacion" name="ubicacion" placeholder="Ej. Puerto Iguazú, Misiones" required>
            </div>

            <!-- div precio y cupos -->
            <div class="row g-3 mb-3">
                <div class="col-md-6">
                    <label for="precios" class="form-label fw-bold small" style="color: #30473a;">
                        Precio por noche ($)
                    </label>
                    <input type="number" class="form-control py-2" id="precios" name="precios" min="0" step="0.01" oninput="if(this.value < 0) this.value = 0;" required>
                </div>
                <div class="col-md-6">
                    <label for="cupos" class="form-label fw-bold small" style="color: #30473a;">
                        Cupos disponibles
                    </label>
                    <input type="number" class="form-control py-2" id="cupos" name="cupos" min="0" step="1" oninput="if(this.value < 0) this.value = 0;" required>
                </div>
            </div>

            <!-- temporada recomendada -->
            <div class="mb-3">
                <label for="temporada" class="form-label fw-bold small" style="color: #30473a;">
                    Temporada recomendada
                </label>
                <select class="form-select py-2" id="temporada" name="temporada" required>
                    <option value="Todo el año" selected>Todo el año</option>
                    <option value="Verano">Verano</option>
                    <option value="Otoño">Otoño</option>
                    <option value="Invierno">Invierno</option>
                    <option value="Primavera">Primavera</option>
                </select>
            </div>

            <!-- Imagen -->
            <div class="mb-3">
                <label for="imagen" class="form-label fw-bold small" style="color: #30473a;">
                    Imagen del alojamiento
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
                <textarea class="form-control" id="descripcion" name="descripcion" rows="4" placeholder="Describí el alojamiento y sus servicios"></textarea>
            </div>

            <!-- botones -->
            <div class="d-flex gap-2 pt-2">
                <button type="submit" class="btn text-white fw-bold px-4 py-2 rounded-3" style="background-color: #286b46;">
                    Guardar alojamiento
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