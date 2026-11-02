<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data['seccion'] = 'inicio';
        return view('home/inicio', $data);
    }

    public function atractivos(): string
    {
        $data['seccion'] = 'atractivos'; // guardo en &data la vista en la quue estoy para colocar la selección
        return view('home/atractivos', $data);
    }

    public function experiencias(): string
    {
        $data['seccion'] = 'experiencias';
        return view('home/experiencias', $data);
    }

    public function sobreMisiones(): string
    {
        $data['seccion'] = 'sobre_misiones';
        return view('home/sobre_misiones', $data);
    }

    public function infoPractica(): string
    {
        $data['seccion'] = 'info_practica';
        return view('home/info_practica', $data);
    }

}