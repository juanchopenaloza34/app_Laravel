<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    protected $table = 'rol'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'codRol',
        'documento',
        'descripcionRol',
    ];
}
