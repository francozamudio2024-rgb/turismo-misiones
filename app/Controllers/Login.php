<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class Login extends BaseController
{
    public function index(): string
    {
        $data['seccion'] = 'login';
        return view('login', $data);
    }

    public function ingresar()
    {
        $email             = $this->request->getPost('email');
        $passwordIngresada = $this->request->getPost('password');

        $usuarioModel = new UsuarioModel();
        $usuario      = $usuarioModel->where('email', $email)->first();

        if ($usuario && password_verify($passwordIngresada, $usuario['password'])) { //Busca si existe el usuario en la base de datos y compara el hush

            session()->set([
                'usuario_id' => $usuario['id'],
                'nombre'     => $usuario['nombre'],
                'apellido'   => $usuario['apellido'],
                'email'      => $usuario['email'],
                'rol'        => $usuario['rol'],
                'logueado'   => true
            ]);

            return redirect()->to(base_url('/'))->with('mensaje', '¡Bienvenido de nuevo, ' . $usuario['nombre'] . '!');

        } else {
            return redirect()->back()->withInput()->with('error', 'El correo o la contraseña son incorrectos.');
        }
    }

    public function salir()
    {
        session()->destroy();
        return redirect()->to(base_url('login'))->with('mensaje', 'Sesión cerrada correctamente.');
    }
}