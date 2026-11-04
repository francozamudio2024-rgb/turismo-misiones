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

        $reservas = $modelo
            ->where('usuario_id', session()->get('usuario_id'))
            ->orderBy('id', 'DESC')
            ->findAll();

        return view('reservas/index', [
            'reservas' => $reservas,
            'actividades' => $actividades->findAll()
        ]);
    }

    public function crear($id)
    {

        $actividades = new ActividadModel();
        $actividad = $actividades->find($id);

        if (!$actividad) {
            return redirect()->to(base_url('actividades'))
                ->with('error', 'La actividad seleccionada no existe.');
        }

        if ((int) $actividad['cupos'] < 1) {
            return redirect()->to(base_url('actividades'))
                ->with('error', 'Esta actividad no tiene cupos disponibles.');
        }

        return view('reservas/crear', [
            'actividad' => $actividad
        ]);
    }

    public function guardar()
    {

        $modelo = new ReservaModel();
        $actividades = new ActividadModel();
        $db = \Config\Database::connect();

        $usuarioId = session()->get('usuario_id');
        $actividadId = $this->request->getPost('actividad_id');
        $cantidad = (int) $this->request->getPost('cantidad');
        $fecha = $this->request->getPost('fecha');

        if (
            empty($usuarioId) ||
            !is_numeric($actividadId) ||
            $cantidad < 1 ||
            empty($fecha)
        ) {
            return redirect()->to(base_url('actividades'))
                ->with('error', 'Completá todos los datos correctamente.');
        }

        $actividad = $actividades->find($actividadId);

        if (!$actividad) {
            return redirect()->to(base_url('actividades'))
                ->with('error', 'La actividad seleccionada no existe.');
        }

        if ((int) $actividad['cupos'] < $cantidad) {
            return redirect()->to(base_url('actividades'))
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

            return redirect()->to(base_url('actividades'))
                ->with('error', 'Los cupos cambiaron o ya no hay disponibilidad.');
        }

        $resultado = $modelo->insert([
            'usuario_id' => $usuarioId,
            'actividad_id' => $actividadId,
            'cantidad' => $cantidad,
            'fecha' => $fecha,
            'total' => $total,
            'devuelto' => 0
        ]);

        if ($resultado === false || !$db->transStatus()) {
            $db->transRollback();

            return redirect()->to(base_url('actividades'))
                ->with('error', 'No se pudo guardar la reserva. Intentá nuevamente.');
        }

        $db->transCommit();

        return redirect()->to(base_url('reservas'))
            ->with('mensaje', 'Reserva confirmada correctamente.');
    }

    public function devolver($id)
    {

        $modelo = new ReservaModel();
        $db = \Config\Database::connect();

        $db->transBegin();

        $reserva = $modelo
            ->where('usuario_id', session()->get('usuario_id'))
            ->find($id);

        if (!$reserva) {
            $db->transRollback();

            return redirect()->to(base_url('reservas'))
                ->with('error', 'La reserva no existe o no te pertenece.');
        }

        if ((int) $reserva['devuelto'] === 1) {
            $db->transRollback();

            return redirect()->to(base_url('reservas'))
                ->with('error', 'Esta reserva ya fue devuelta.');
        }

        if (strtotime($reserva['fecha']) <= time()) {
            $db->transRollback();

            return redirect()->to(base_url('reservas'))
                ->with('error', 'No podés devolver una reserva cuya actividad ya comenzó.');
        }

        $db->query(
            'UPDATE reservas
             SET devuelto = 1
             WHERE id = ? AND usuario_id = ? AND devuelto = 0',
            [$id, session()->get('usuario_id')]
        );

        if ($db->affectedRows() !== 1) {
            $db->transRollback();

            return redirect()->to(base_url('reservas'))
                ->with('error', 'No se pudo devolver la reserva.');
        }

        $db->query(
            'UPDATE actividades
             SET cupos = cupos + ?
             WHERE id = ?',
            [(int) $reserva['cantidad'], (int) $reserva['actividad_id']]
        );

        if (!$db->transStatus()) {
            $db->transRollback();

            return redirect()->to(base_url('reservas'))
                ->with('error', 'No se pudo completar la devolución.');
        }

        $db->transCommit();

        return redirect()->to(base_url('reservas'))
            ->with('mensaje', 'La reserva fue devuelta correctamente y los cupos fueron recuperados.');
    }
}