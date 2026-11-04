<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class UsuarioController extends BaseController
{
    public function index()
    {
        $usuarioModel = new UsuarioModel();

        $data['usuarios'] = $usuarioModel
            ->select('id, nombre, apellido, email, rol')
            ->orderBy('id', 'DESC')
            ->findAll();

        return view('usuarios/index', $data);
    }
}
