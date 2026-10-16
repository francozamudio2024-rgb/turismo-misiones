<?php
namespace App\Controllers;

use App\Models\ActividadModel;

class ActividadController extends BaseController
{
    public function index()
    {
        $modelo = new ActividadModel();
        $actividades = $modelo->findAll();
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
        $modelo = new ActividadModel();

        $datos = [
            'nombre'      => $this->request->getPost('nombre'),
            'categoria'   => $this->request->getPost('categoria'),
            'ubicacion'   => $this->request->getPost('ubicacion'),
            'cupos'       => $this->request->getPost('cupos'),
            'precios'     => $this->request->getPost('precios'),
            'imagen'      => $this->request->getPost('imagen'),
            'temporada'   => $this->request->getPost('temporada'),
            'descripcion' => $this->request->getPost('descripcion'),
        ];

        $modelo->insert($datos);

        return redirect()->to(base_url('actividades'));
    }

    public function eliminar($id)
    {
        $modelo = new ActividadModel();
        $modelo->delete($id);

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

        $datos = [
            'nombre'      => $this->request->getPost('nombre'),
            'categoria'   => $this->request->getPost('categoria'),
            'ubicacion'   => $this->request->getPost('ubicacion'),
            'cupos'       => $this->request->getPost('cupos'),
            'precios'     => $this->request->getPost('precios'),
            'imagen'      => $this->request->getPost('imagen'),
            'temporada'   => $this->request->getPost('temporada'),
            'descripcion' => $this->request->getPost('descripcion'),
        ];

        $modelo->update($id, $datos);

        return redirect()->to(base_url('actividades'));
    }
}
