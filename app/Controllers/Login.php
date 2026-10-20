<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index(): string
    {
        $data['seccion'] = 'login';
        return view('login', $data);
    }
}