<?php

namespace App\Controllers;

use App\Models\AlojamientoModel;

class AlojamientoController extends BaseController
{
    private function esAdmin()
    {
        return strtolower((string) session()->get('rol')) === 'admin';
    }

    public function index()
    {
        $modelo = new AlojamientoModel();
        $alojamientos = $modelo->findAll();

        return view('alojamientos/index', [
            'alojamientos' => $alojamientos
        ]);
    }

    public function crear()
    {
        if (!$this->esAdmin()) {
            return redirect()->to('/alojamientos');
        }

        return view('alojamientos/crear');
    }

    public function guardar()
    {
        if (!$this->esAdmin()) {
            return redirect()->to('/alojamientos');
        }

        // reglas de validaciones para las imagenes
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

        $nombreImagen = 'default.jpg'; // Iimagen por defecto

        $file = $this->request->getFile('imagen');

        if ($file && $file->isValid() && !$file->hasMoved()) {
            if ($this->validate($reglas)) {
                
                $rutaDestino = FCPATH . 'img/alojamientos/'; 

                // guarda la imagen con un nombre aleatorio
                $nombreImagen = $file->getRandomName();
                $file->move($rutaDestino, $nombreImagen);
            } else {
                return redirect()->back()->withInput()->with('error', $this->validator->getErrors()['imagen'] ?? 'Error al subir la imagen.');
            }
        }

        $modelo = new AlojamientoModel();

        $datos = [
            'nombre'      => $this->request->getPost('nombre'),
            'tipo'        => $this->request->getPost('tipo'),
            'ubicacion'   => $this->request->getPost('ubicacion'),
            'precios'     => $this->request->getPost('precios'),
            'imagen'      => $nombreImagen,
            'descripcion' => $this->request->getPost('descripcion')
        ];

        $modelo->insert($datos);

        return redirect()->to('/alojamientos');
    }

    public function editar($id)
    {
        if (!$this->esAdmin()) {
            return redirect()->to('/alojamientos');
        }

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
        if (!$this->esAdmin()) {
            return redirect()->to('/alojamientos');
        }

        $modelo = new AlojamientoModel();
        $alojamiento = $modelo->find($id);

        if (!$alojamiento) {
            return redirect()->to('/alojamientos');
        }

        $nombreImagen = $alojamiento['imagen'];
        $file = $this->request->getFile('imagen');

        // verificacion del nuevo archivo de imagen
        if ($file && $file->getError() === UPLOAD_ERR_OK && $file->isValid() && !$file->hasMoved()) {
            
            $reglas = [
                'imagen' => [
                    'rules' => 'is_image[imagen]|mime_in[imagen,image/jpg,image/jpeg,image/png,image/gif]|max_size[imagen,4096]'
                ]
            ];

            if ($this->validate($reglas)) {
                $rutaVieja = FCPATH . 'img/alojamientos/' . $alojamiento['imagen'];
                
                // borra la imagen anterior.
                if (!empty($alojamiento['imagen']) && is_file($rutaVieja) && $alojamiento['imagen'] !== 'default.jpg') {
                    @unlink($rutaVieja);
                }

                $nombreImagen = $file->getRandomName();
                $file->move(FCPATH . 'img/alojamientos/', $nombreImagen);
            }
        }

        $datos = [
            'nombre'      => $this->request->getPost('nombre'),
            'tipo'        => $this->request->getPost('tipo'),
            'ubicacion'   => $this->request->getPost('ubicacion'),
            'precios'     => $this->request->getPost('precios'),
            'imagen'      => $nombreImagen,
            'descripcion' => $this->request->getPost('descripcion')
        ];

        $modelo->update($id, $datos);

        return redirect()->to('/alojamientos');
    }

    public function eliminar($id)
    {
        if (!$this->esAdmin()) {
            return redirect()->to('/alojamientos');
        }

        $modelo = new AlojamientoModel();
        $alojamiento = $modelo->find($id);

        if ($alojamiento) {
            $rutaImagen = FCPATH . 'img/alojamientos/' . $alojamiento['imagen'];
            
            if (!empty($alojamiento['imagen']) && is_file($rutaImagen) && $alojamiento['imagen'] !== 'default.jpg') {
                @unlink($rutaImagen);
            }

            $modelo->delete($id);
        }

        return redirect()->to('/alojamientos');
    }

    public function detalle($id)
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