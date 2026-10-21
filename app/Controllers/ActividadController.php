<?php

namespace App\Controllers;

use App\Models\ActividadModel;

class ActividadController extends BaseController
{
    public function index()
    {
        $modelo = new ActividadModel();

        return view('actividades/index', [
            'actividades' => $modelo->findAll()
        ]);
    }

    public function crear()
    {
        return view('actividades/crear');
    }

    public function guardar()
    {
        $modelo = new ActividadModel();

        $imagen = $this->subirImagen();

        if ($imagen === false) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'La imagen no es válida. Usá JPG, PNG o WEBP de hasta 2 MB.');
        }

        $datos = [
            'nombre'      => $this->request->getPost('nombre'),
            'categoria'   => $this->request->getPost('categoria'),
            'ubicacion'   => $this->request->getPost('ubicacion'),
            'cupos'       => $this->request->getPost('cupos'),
            'precios'     => $this->request->getPost('precios'),
            'imagen'      => $imagen ?? '',
            'temporada'   => $this->request->getPost('temporada'),
            'descripcion' => $this->request->getPost('descripcion'),
        ];

        $modelo->insert($datos);

        return redirect()->to(base_url('actividades'));
    }

    public function editar($id)
    {
        $modelo = new ActividadModel();
        $actividad = $modelo->find($id);

        if (!$actividad) {
            return redirect()->to(base_url('actividades'));
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
            return redirect()->to(base_url('actividades'));
        }

        $imagen = $this->subirImagen();

        if ($imagen === false) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'La imagen no es válida. Usá JPG, PNG o WEBP de hasta 2 MB.');
        }

        $datos = [
            'nombre'      => $this->request->getPost('nombre'),
            'categoria'   => $this->request->getPost('categoria'),
            'ubicacion'   => $this->request->getPost('ubicacion'),
            'cupos'       => $this->request->getPost('cupos'),
            'precios'     => $this->request->getPost('precios'),
            'imagen'      => $imagen ?? $actividad['imagen'],
            'temporada'   => $this->request->getPost('temporada'),
            'descripcion' => $this->request->getPost('descripcion'),
        ];

        $modelo->update($id, $datos);

        return redirect()->to(base_url('actividades'));
    }

    public function eliminar($id)
    {
        $modelo = new ActividadModel();
        $modelo->delete($id);

        return redirect()->to(base_url('actividades'));
    }

    private function subirImagen()
    {
        $archivo = $this->request->getFile('imagen');

        if (!$archivo || $archivo->getError() === UPLOAD_ERR_NO_FILE) {
            return null;
        }

        if (!$archivo->isValid() || $archivo->hasMoved()) {
            return false;
        }

        if ($archivo->getSize() > 2 * 1024 * 1024) {
            return false;
        }

        $tiposPermitidos = [
            'image/jpeg' => 'jpg',
            'image/png'  => 'png',
            'image/webp' => 'webp',
        ];

        $mime = $archivo->getMimeType();

        if (!isset($tiposPermitidos[$mime])) {
            return false;
        }

        $carpeta = FCPATH . 'img' . DIRECTORY_SEPARATOR;

        if (!is_dir($carpeta) && !mkdir($carpeta, 0755, true)) {
            return false;
        }

        $nombre = $archivo->getRandomName();
        $nombre = pathinfo($nombre, PATHINFO_FILENAME)
            . '.'
            . $tiposPermitidos[$mime];

        if (!$archivo->move($carpeta, $nombre)) {
            return false;
        }

        return $nombre;
    }
}