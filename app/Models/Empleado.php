<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
     protected $fillable = [ 
        'identidad', 
        'nombre', 
        'apellido', 
        'cargo', 
        'salario',
        'codigo empleado',
    ]; 
}
