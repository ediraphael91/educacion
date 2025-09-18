<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = [
    'nombre',
    'categoria',
    'codigo',
    'descripcion',
    'duracion',
    'nivel ',
    'precio',
    'estado',
    'fecha_inicio',
    'fecha_fin',
    ];
}
