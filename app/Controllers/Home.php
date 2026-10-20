<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data['seccion'] = 'inicio';
        return view('inicio', $data);
    }

    public function atractivos(): string
    {
        $data['seccion'] = 'atractivos'; // guardo en &data la vista en la quue estoy para colocar la selección
        return view('atractivos', $data);
    }

    public function experiencias(): string
    {
        $data['seccion'] = 'experiencias';
        return view('experiencias', $data);
    }

    public function sobreMisiones(): string
    {
        $data['seccion'] = 'sobre_misiones';
        return view('sobre_misiones', $data);
    }

    public function infoPractica(): string
    {
        $data['seccion'] = 'info_practica';
        return view('info_practica', $data);
    }

}