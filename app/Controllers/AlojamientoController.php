<?php

namespace App\Controllers;

use App\Models\AlojamientoModel;

class AlojamientoController extends BaseController
{
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
        return view('alojamientos/crear');
    }

    public function guardar()
    {
        $modelo = new AlojamientoModel();

        $datos = [
            'nombre' => $this->request->getPost('nombre'),
            'tipo' => $this->request->getPost('tipo'),
            'ubicacion' => $this->request->getPost('ubicacion'),
            'precios' => $this->request->getPost('precios'),
            'imagen' => $this->request->getPost('imagen'),
            'descripcion' => $this->request->getPost('descripcion')
        ];

        $modelo->insert($datos);

        return redirect()->to('/alojamientos');
    }

    public function editar($id)
    {
        $modelo = new AlojamientoModel();
        $alojamiento = $modelo->find($id);

        return view('alojamientos/editar', [
            'alojamiento' => $alojamiento
        ]);
    }

    public function actualizar($id)
    {
        $modelo = new AlojamientoModel();

        $datos = [
            'nombre' => $this->request->getPost('nombre'),
            'tipo' => $this->request->getPost('tipo'),
            'ubicacion' => $this->request->getPost('ubicacion'),
            'precios' => $this->request->getPost('precios'),
            'imagen' => $this->request->getPost('imagen'),
            'descripcion' => $this->request->getPost('descripcion')
        ];

        $modelo->update($id, $datos);

        return redirect()->to('/alojamientos');
    }

    public function eliminar($id)
    {
        $modelo = new AlojamientoModel();
        $modelo->delete($id);

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

