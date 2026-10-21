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

        // Armás el arreglo y encriptás la clave directamente
        $datos = [
            'nombre'   => $this->request->getPost('nombre'),
            'apellido' => $this->request->getPost('apellido'),
            'email'    => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'rol'      => 'cliente'
        ];

        // Guardás en la base de datos
        $usuarioModel->insert($datos);

        return redirect()->to(base_url('login'))->with('mensaje', '¡Usuario registrado!');
    }
}