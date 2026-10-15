<?php

namespace App\Controllers;

use App\Models\ActividadModel;

class ActividadController extends BaseController
{
    public function index()
    {
        $modelo = new ActividadModel();

        $actividades = $modelo->findAll();

        $datos['actividades'] = $actividades;

        return view('actividades/index', $datos);
    }
}