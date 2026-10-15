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
        'descripcion'
    ];
}