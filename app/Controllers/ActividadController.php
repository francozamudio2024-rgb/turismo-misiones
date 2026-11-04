<?php

namespace App\Controllers;

use App\Models\ActividadModel;

class ActividadController extends BaseController
{
    public function index()
    {
        $modelo = new ActividadModel();
        $actividades = $modelo->findAll();

        // Calcula la temporada actual
        $mesActual = (int) date('n');
        if (in_array($mesActual, [12, 1, 2])) {
            $temporadaActual = 'Verano';
        } elseif (in_array($mesActual, [3, 4, 5])) {
            $temporadaActual = 'Otoño';
        } elseif (in_array($mesActual, [6, 7, 8])) {
            $temporadaActual = 'Invierno';
        } else {
            $temporadaActual = 'Primavera';
        }

        // Calcula la actividad con más reservas
        $idMasElegida = null;
        $db = \Config\Database::connect();

        if ($db->tableExists('reservas')) {
            $builder = $db->table('reservas');
            $builder->select('actividad_id, SUM(cantidad) as total_cupos_reservados');
            $builder->where('actividad_id >', 0);
            $builder->groupBy('actividad_id');
            $builder->orderBy('total_cupos_reservados', 'DESC');

            $query = $builder->get()->getRowArray();
            $idMasElegida = $query['actividad_id'] ?? null;
        }

        // Badges lógicos
        foreach ($actividades as &$actividad) {
            $actividad['destacada'] = false;
            $actividad['mas_buscada'] = false;

            $temporadaActividad = trim($actividad['temporada'] ?? 'Todo el año');

            if ($temporadaActividad === $temporadaActual || $temporadaActividad === 'Todo el año') {
                $actividad['destacada'] = true;
            }

            if ($idMasElegida !== null && (int)$actividad['id'] === (int)$idMasElegida) {
                $actividad['mas_buscada'] = true;
            }
        }

        return view('actividades/index', [
            'actividades' => $actividades
        ]);
    }

    public function crear()
    {
        return view('actividades/crear');
    }

    public function guardar()
    {
        // Reglas de validación para la imagen
        $reglas = [
            'imagen' => [
                'rules'  => 'is_image[imagen]|mime_in[imagen,image/jpg,image/jpeg,image/png,image/gif,image/webp]|max_size[imagen,4096]',
                'errors' => [
                    'is_image' => 'El archivo seleccionado no es una imagen válida.',
                    'mime_in'  => 'Solo se permiten imágenes con extensión JPG, PNG, WEBP o GIF.',
                    'max_size' => 'La imagen supera el tamaño máximo permitido de 4MB.'
                ]
            ]
        ];

        $nombreImagen = 'default.jpg';
        $file = $this->request->getFile('imagen');

        if ($file && $file->isValid() && !$file->hasMoved()) {
            if ($this->validate($reglas)) {
                $rutaDestino = FCPATH . 'img/actividades/';
                // getRandomName() asigna un hash con la extensión nativa del archivo
                $nombreImagen = $file->getRandomName();
                $file->move($rutaDestino, $nombreImagen);
            } else {
                return redirect()->back()->withInput()->with('error', $this->validator->getErrors()['imagen'] ?? 'Error al subir la imagen.');
            }
        }

        $modelo = new ActividadModel();

        $datos = [
            'nombre' => $this->request->getPost('nombre'),
            'tipo' => $this->request->getPost('tipo') ?? $this->request->getPost('categoria'),
            'ubicacion' => $this->request->getPost('ubicacion'),
            'precios' => $this->request->getPost('precios') ?? $this->request->getPost('precio'),
            'cupos' => $this->request->getPost('cupos'),
            'temporada' => $this->request->getPost('temporada'),
            'imagen' => $nombreImagen,
            'descripcion' => $this->request->getPost('descripcion'),
            'estado' => 'A'
        ];

        $modelo->insert($datos);

        return redirect()->to('/actividades')->with('mensaje', 'Actividad agregada con éxito.');
    }

    public function editar($id)
    {
        $modelo = new ActividadModel();
        $actividad = $modelo->find($id);

        if (!$actividad) {
            return redirect()->to('/actividades')->with('error', 'La actividad no existe.');
        }

        return view('actividades/editar', [
            'actividad' => $actividad
        ]);
    }

    public function actualizar($id)
    {
        $modelo = new ActividadModel();
        $actividad = $modelo->find($id);

        if (!$actividad) {
            return redirect()->to('/actividades');
        }

        $nombreImagen = $actividad['imagen'];
        $file = $this->request->getFile('imagen');

        if ($file && $file->getError() === UPLOAD_ERR_OK && $file->isValid() && !$file->hasMoved()) {
            $reglas = [
                'imagen' => [
                    'rules' => 'is_image[imagen]|mime_in[imagen,image/jpg,image/jpeg,image/png,image/gif,image/webp]|max_size[imagen,4096]'
                ]
            ];

            if ($this->validate($reglas)) {
                $rutaVieja = FCPATH . 'img/actividades/' . $actividad['imagen'];

                if (!empty($actividad['imagen']) && is_file($rutaVieja) && $actividad['imagen'] !== 'default.jpg') {
                    @unlink($rutaVieja);
                }

                $nombreImagen = $file->getRandomName();
                $file->move(FCPATH . 'img/actividades/', $nombreImagen);
            }
        }

        $datos = [
            'nombre' => $this->request->getPost('nombre'),
            'tipo' => $this->request->getPost('tipo') ?? $this->request->getPost('categoria'),
            'ubicacion' => $this->request->getPost('ubicacion'),
            'precios' => $this->request->getPost('precios') ?? $this->request->getPost('precio'),
            'cupos' => $this->request->getPost('cupos'),
            'temporada' => $this->request->getPost('temporada'),
            'imagen' => $nombreImagen,
            'descripcion' => $this->request->getPost('descripcion')
        ];

        $modelo->update($id, $datos);

        return redirect()->to('/actividades')->with('mensaje', 'Actividad actualizada con éxito.');
    }

    public function eliminar($id)
    {
        $modelo = new ActividadModel();
        $actividad = $modelo->find($id);

        if ($actividad) { 
            $modelo->update($id, ['estado' => 'I']);
        }

        return redirect()->to('/actividades')->with('mensaje', 'Actividad dada de baja correctamente.');
    }

    public function reserva($id)
    {
        $modelo = new ActividadModel();
        $actividad = $modelo->find($id);

        if (!$actividad) {
            return redirect()->to('/actividades')->with('error', 'La actividad no existe.');
        }

        return view('actividades/reserva', [
            'actividad' => $actividad
        ]);
    }

    public function procesarReserva()
    {
        $idActividad = $this->request->getPost('actividad_id');
        $cantidad = (int) $this->request->getPost('cantidad');

        if (!$idActividad || $cantidad <= 0) {
            return redirect()->back()->with('error', 'Datos de reserva no válidos.');
        }

        $modeloActividad = new ActividadModel();
        $actividad = $modeloActividad->find($idActividad);

        if (!$actividad) {
            return redirect()->to('/actividades')->with('error', 'La actividad no existe.');
        }

        $cuposDisponibles = (int) ($actividad['cupos'] ?? 0);

        if ($cantidad > $cuposDisponibles) {
            return redirect()->back()->with('error', 'No hay suficientes cupos disponibles.');
        }

        $db = \Config\Database::connect();
        $db->transStart();

        $nuevosCupos = $cuposDisponibles - $cantidad;
        $modeloActividad->update($idActividad, ['cupos' => $nuevosCupos]);

        $datosReserva = [
            'usuario_id' => session()->get('usuario_id'),
            'actividad_id' => $idActividad,
            'alojamiento_id' => 0,
            'cantidad' => $cantidad,
            'fecha' => date('Y-m-d H:i:s'),
            'total' => $cantidad * (float) ($actividad['precios'] ?? $actividad['precio'] ?? 0),
            'devolucion' => 'NO'
        ];

        $db->table('reservas')->insert($datosReserva);

        $db->transComplete();

        if ($db->transStatus() === false) {
            return redirect()->back()->with('error', 'Ocurrió un error al procesar la reserva. Intentalo de nuevo.');
        }

        return redirect()->to('/actividades')->with('mensaje', '¡Reserva realizada con éxito!');
    }
}