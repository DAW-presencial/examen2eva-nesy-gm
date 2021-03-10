<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TutoresController;
use App\Http\Controllers\TutorController;
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
Route::view('/', 'cen_docentes');
Route::view('/',[CenDocente::Class, 'index' ]);
Route::get('/',[CenDocente::Class, 'index' ]);
Route::get('/','CenDocente@create');
Route::redirect('/', '/cen_docentes/create');
Route::resource('/cen_docentes', CenDocente::class)->parameters(['cen_docentes'=>'cen_docente'])->names(['create'=>'cen_docentes.crear']);

