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
        $db = \Config\Database::connect();

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
            return redirect()->to(base_url('reservas'))
                ->with('error', 'Completá todos los datos correctamente.');
        }

        $actividad = $actividades->find($actividadId);

        if (!$actividad) {
            return redirect()->to(base_url('reservas'))
                ->with('error', 'La actividad seleccionada no existe.');
        }

        if ((int) $actividad['cupos'] < $cantidad) {
            return redirect()->to(base_url('reservas'))
                ->with('error', 'No hay cupos suficientes para esa cantidad de personas.');
        }

        $fecha = str_replace('T', ' ', $fecha);

        if (strlen($fecha) === 16) {
            $fecha .= ':00';
        }

        $total = (float) $actividad['precios'] * $cantidad;

        $db->transBegin();

        $db->query(
            'UPDATE actividades
             SET cupos = cupos - ?
             WHERE id = ? AND cupos >= ?',
            [$cantidad, $actividadId, $cantidad]
        );

        if ($db->affectedRows() !== 1) {
            $db->transRollback();

            return redirect()->to(base_url('reservas'))
                ->with('error', 'Los cupos cambiaron o ya no hay disponibilidad.');
        }

        $resultado = $modelo->insert([
            'usuario_id' => $usuarioId,
            'actividad_id' => $actividadId,
            'cantidad' => $cantidad,
            'fecha' => $fecha,
            'total' => $total
        ]);

        if ($resultado === false || !$db->transStatus()) {
            $db->transRollback();

            return redirect()->to(base_url('reservas'))
                ->with('error', 'No se pudo guardar la reserva. Intentá nuevamente.');
        }

        $db->transCommit();

        return redirect()->to(base_url('reservas'))
            ->with('mensaje', 'Reserva confirmada correctamente.');
    }

    public function eliminar($id)
    {
        $modelo = new ReservaModel();
        $actividades = new ActividadModel();
        $db = \Config\Database::connect();

        $db->transBegin();

        $reserva = $modelo->find($id);

        if (!$reserva) {
            $db->transRollback();

            return redirect()->to(base_url('reservas'))
                ->with('error', 'La reserva no existe.');
        }

        $db->query(
            'UPDATE actividades
             SET cupos = cupos + ?
             WHERE id = ?',
            [(int) $reserva['cantidad'], (int) $reserva['actividad_id']]
        );

        $modelo->delete($id);

        if (!$db->transStatus()) {
            $db->transRollback();

            return redirect()->to(base_url('reservas'))
                ->with('error', 'No se pudo eliminar la reserva.');
        }

        $db->transCommit();

        return redirect()->to(base_url('reservas'))
            ->with('mensaje', 'Reserva eliminada y cupos devueltos correctamente.');
    }
}
