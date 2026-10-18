<?php

namespace App\Controllers;

use App\Models\ReservaModel;
use App\Models\ActividadModel;

class ReservaController extends BaseController
{
    public function index()
    {
        $modelo = new ReservaModel();
        $actividades = new ActividadModel();

        return view('reservas/index', [
            'reservas' => $modelo->findAll(),
            'actividades' => $actividades->findAll()
        ]);
    }

    public function guardar()
    {
        $modelo = new ReservaModel();
        $actividades = new ActividadModel();

        $usuarioId = $this->request->getPost('usuario_id');
        $actividadId = $this->request->getPost('actividad_id');
        $cantidad = (int) $this->request->getPost('cantidad');
        $fecha = $this->request->getPost('fecha');

        if (
            !is_numeric($usuarioId) ||
            !is_numeric($actividadId) ||
            $cantidad < 1 ||
            empty($fecha)
        ) {
            return redirect()->to(base_url('reservas'));
        }

        $actividad = $actividades->find($actividadId);

        if (!$actividad) {
            return redirect()->to(base_url('reservas'));
        }

        $total = (float) $actividad['precios'] * $cantidad;
        $fecha = str_replace('T', ' ', $fecha) . ':00';

        $modelo->insert([
            'usuario_id' => $usuarioId,
            'actividad_id' => $actividadId,
            'cantidad' => $cantidad,
            'fecha' => $fecha,
            'total' => $total
        ]);

        return redirect()->to(base_url('reservas'));
    }

    public function eliminar($id)
    {
        $modelo = new ReservaModel();
        $modelo->delete($id);

        return redirect()->to(base_url('reservas'));
    }
}