<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TutoresController;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\CenDocenteController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/', function () {
//     return view('welcome');
// });
/*
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard'); */

//Route::get('/','TutoresController@create');
//Route::get('/',[TutoresController::Class, 'index' ]);

//RUTAS CREADAS
App::setlocale('es');
//Route::view('/', 'cen_docentes');
//Route::get('/',[CenDocente::Class, 'index' ]);
Route::get('/',[CenDocenteController::class,'create']);
//Route::redirect('/cen_docentes/create', 'cen_docentes');
//Route::resource('cen_docentes', CenDocente::class);
Route::resource('/cen_docentes', CenDocenteController::class)->parameters(['cen_docentes'=>'cen_docente'])->names(['create'=>'cen_docentes.crear']);

