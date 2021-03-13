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
		'cif',
		'titularidad',
		'dir_postal',
		'cp',
		'nombre_director',
		'apellido1_director',
		'apellido2_director',
		'identificador',
		'tipo_identificador',

	];
}
