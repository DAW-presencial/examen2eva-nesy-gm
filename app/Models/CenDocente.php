<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CenDocente extends Model
{
    use HasFactory;

    protected $fillable = [
        'denominacion',
        'codigo',
        'titularidad',
        'dir_postal',
        'apellido1_director',
        'apellido2_director',
        'pais_doc',
        'provincia',
        'municipio',
        'telefono',
        'email',
        'status',
    ];
}
