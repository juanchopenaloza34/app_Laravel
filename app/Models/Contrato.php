<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    use HasFactory;

    protected $table = 'contrato'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'idCargo',
        'codTipoContrato',
        'salario',
        'fechaInicio',
        'fechaFin',
        'jornadaLaboral',
    ];
}
