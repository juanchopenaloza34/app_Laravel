<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;

    protected $table = 'cargo'; // Nombre de la tabla

    // No es necesario incluir campos autoincrementables como 'idCargo'
    protected $fillable = [
        'idDepartamento',
        'codNivelRiesgo',
        'descripcionCargo'
    ];
}
