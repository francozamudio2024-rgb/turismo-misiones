<?php

namespace App\Controllers;

use App\Models\AlojamientoModel;

class AlojamientoController extends BaseController
{
    public function index()
    {
        $modelo = new AlojamientoModel();
        $alojamientos = $modelo->findAll();

        // calcula la esttemporada actual
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

        // calcula el alojamiento con más reservas.
        $idMasElegido = null;
        $db = \Config\Database::connect();
    
        if ($db->tableExists('reservas')) {
            $builder = $db->table('reservas');
            $builder->select('alojamiento_id, SUM(cantidad) as total_cupos_reservados');
            $builder->where('alojamiento_id >', 0); // Ignora las filas que corresponden a actividades
            $builder->groupBy('alojamiento_id');
            $builder->orderBy('total_cupos_reservados', 'DESC');
        
            $query = $builder->get()->getRowArray();
            $idMasElegido = $query['alojamiento_id'] ?? null;
        }

        // 3. Mapear banderas dinámicas para la vista
        foreach ($alojamientos as &$alojamiento) {
            $alojamiento['recomendado'] = false;
            $alojamiento['mas_elegido'] = false;

            $temporadaAlojamiento = trim($alojamiento['temporada'] ?? 'Todo el año');

            if ($temporadaAlojamiento === $temporadaActual || $temporadaAlojamiento === 'Todo el año') {
                $alojamiento['recomendado'] = true;
            }

            if ($idMasElegido !== null && (int)$alojamiento['id'] === (int)$idMasElegido) {
                $alojamiento['mas_elegido'] = true;
            }
        }

        return view('alojamientos/index', [
            'alojamientos' => $alojamientos
        ]);
    }

    public function crear()
    {

        return view('alojamientos/crear');
    }

    public function guardar()
    {

        // Reglas de validación para las imágenes
        $reglas = [
            'imagen' => [
                'rules'  => 'is_image[imagen]|mime_in[imagen,image/jpg,image/jpeg,image/png,image/gif]|max_size[imagen,4096]',
                'errors' => [
                    'is_image' => 'El archivo seleccionado no es una imagen válida.',
                    'mime_in'  => 'Solo se permiten imágenes con extensión GIF, JPG o PNG.',
                    'max_size' => 'La imagen supera el tamaño máximo permitido de 4MB.'
                ]
            ]
        ];

        $nombreImagen = 'default.jpg';
        $file = $this->request->getFile('imag   en');

        if ($file && $file->isValid() && !$file->hasMoved()) {
            if ($this->validate($reglas)) {
                $rutaDestino = FCPATH . 'img/alojamientos/';
                $nombreImagen = $file->getRandomName();
                $file->move($rutaDestino, $nombreImagen);
            } else {
                return redirect()->back()->withInput()->with('error', $this->validator->getErrors()['imagen'] ?? 'Error al subir la imagen.');
            }
        }

        $modelo = new AlojamientoModel();

        // Se toman los valores directamente del POST sin filtros de mínimos
        $datos = [
            'nombre'      => $this->request->getPost('nombre'),
            'tipo'        => $this->request->getPost('tipo'),
            'ubicacion'   => $this->request->getPost('ubicacion'),
            'precios'     => $this->request->getPost('precios'),
            'cupos'       => $this->request->getPost('cupos'),
            'temporada'   => $this->request->getPost('temporada'),
            'imagen'      => $nombreImagen,
            'descripcion' => $this->request->getPost('descripcion'),
            'estado' => 'A'
        ];

        $modelo->insert($datos);

        return redirect()->to('/alojamientos');
    }

    public function editar($id)
    {

        $modelo = new AlojamientoModel();
        $alojamiento = $modelo->find($id);

        if (!$alojamiento) {
            return redirect()->to('/alojamientos');
        }

        return view('alojamientos/editar', [
            'alojamiento' => $alojamiento
        ]);
    }

    public function actualizar($id)
    {

        $modelo = new AlojamientoModel();
        $alojamiento = $modelo->find($id);

        if (!$alojamiento) {
            return redirect()->to('/alojamientos');
        }

        $nombreImagen = $alojamiento['imagen'];
        $file = $this->request->getFile('imagen');

        if ($file && $file->getError() === UPLOAD_ERR_OK && $file->isValid() && !$file->hasMoved()) {
            $reglas = [
                'imagen' => [
                    'rules' => 'is_image[imagen]|mime_in[imagen,image/jpg,image/jpeg,image/png,image/gif]|max_size[imagen,4096]'
                ]
            ];

            if ($this->validate($reglas)) {
                $rutaVieja = FCPATH . 'img/alojamientos/' . $alojamiento['imagen'];

                if (!empty($alojamiento['imagen']) && is_file($rutaVieja) && $alojamiento['imagen'] !== 'default.jpg') {
                    @unlink($rutaVieja);
                }

                $nombreImagen = $file->getRandomName();
                $file->move(FCPATH . 'img/alojamientos/', $nombreImagen);
            }
        }

        // Se toman los valores directamente del POST sin filtros de mínimos
        $datos = [
            'nombre'      => $this->request->getPost('nombre'),
            'tipo'        => $this->request->getPost('tipo'),
            'ubicacion'   => $this->request->getPost('ubicacion'),
            'precios'     => $this->request->getPost('precios'),
            'cupos'       => $this->request->getPost('cupos'),
            'temporada'   => $this->request->getPost('temporada'),
            'imagen'      => $nombreImagen,
            'descripcion' => $this->request->getPost('descripcion')
        ];

        $modelo->update($id, $datos);

        return redirect()->to('/alojamientos');
    }

    public function eliminar($id)
        {

            $modelo = new AlojamientoModel();
            $alojamiento = $modelo->find($id);

            if ($alojamiento) { 
                $modelo->update($id, ['estado' => 'I']);
            }

            return redirect()->to('/alojamientos');
        }

    public function reserva($id)
    {
        $modelo = new AlojamientoModel();
        $alojamiento = $modelo->find($id);

        if (!$alojamiento) {
            return redirect()->to('/alojamientos');
        }

        return view('alojamientos/detalle', [
            'alojamiento' => $alojamiento
        ]);
    }
}