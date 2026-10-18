<?php

namespace App\Models;

use CodeIgniter\Model;

class ReservaModel extends Model
{
    protected $table = 'reservas';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'usuario_id',
        'actividad_id',
        'cantidad',
        'fecha',
        'total'
    ];
}