<?php

namespace App\Models;

use CodeIgniter\Model;

class AlojamientoModel extends Model
{
    protected $table = 'alojamientos';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nombre',
        'tipo',
        'ubicacion',
        'precios',
        'imagen',
        'descripcion'
    ];
}