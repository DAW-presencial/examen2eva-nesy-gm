<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;
        protected $fillable = [
        'empresa',
        'documento',
        'nombre_tutor_emp',
        'apellido1_tutor_emp',
        'apellido2_tutor_emp',
        'pais_documento',
        'provincia',
        'municipio',
        'status',
        'telefono',
        'email',
       
    ];
}
