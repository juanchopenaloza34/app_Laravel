<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresa';

    protected $primaryKey = 'nit';
    
    public $incrementing = false;
    
    protected $fillable = [
        'nit', 'tipoContribuyente', 'digitoVerificacion', 'nombre', 
        'telefono', 'email', 'direccion', 'logo', 'rut', 'camaraComercio'
    ];
    
    protected $casts = [
        'logo' => 'binary', // Si necesitas que Laravel trate esto como datos binarios
    ];
}
