<?php

namespace App\Controllers;

class Registro extends BaseController
{
    public function index(): string
    {
        $data['seccion'] = 'registro';
        return view('registro', $data);
    }

    public function guardar()
    {
        $usuarioModel = new \App\Models\UsuarioModel();

        $datos = [
            'nombre'   => $this->request->getPost('nombre'),
            'apellido' => $this->request->getPost('apellido'),
            'email'    => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT), //Se encripta la clave
            'rol'      => 'cliente'
        ];

        $usuarioModel->insert($datos); //se hace un insert en la base de datos

        return redirect()->to(base_url('login'))->with('mensaje', '¡Usuario registrado!');
    }
}