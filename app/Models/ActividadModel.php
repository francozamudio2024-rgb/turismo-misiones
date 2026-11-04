<?php

namespace App\Models;

use CodeIgniter\Model;

class ActividadModel extends Model
{
    protected $table = 'actividades';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nombre',
        'categoria',
        'ubicacion',
        'cupos',
        'precios',
        'imagen',
        'temporada',
<<<<<<< HEAD
        'estado',
        'descripcion'
=======
        'descripcion',
        'fecha_salida',
        'hora_salida'
>>>>>>> 3d73ad5 (modificacion de fecha y cupos)
    ];
}