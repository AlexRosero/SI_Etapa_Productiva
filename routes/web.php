<?php

use App\Http\Controllers\AprendizController;
use App\Http\Controllers\CentroController;
use App\Http\Controllers\EntregablesController;
use App\Http\Controllers\FichaController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\ProgramaController;
use App\Http\Controllers\UsuarioController;
//use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('aprendices', AprendizController::class);
Route::resource('instructores', InstructorController::class);
Route::resource('programas', ProgramaController::class);
Route::resource('fichas', FichaController::class);

Route::resource('usuarios', UsuarioController::class);
Route::resource('entregables', EntregablesController::class);
Route::resource('centros', CentroController::class);


/////////////////
//Login

Route::get('login','App\Http\Controllers\LoginController@showLogin'::class);
Route::post('login', 'App\Http\Controllers\LoginController@login'::class);


//roles
/*
Route::get('login/Aprendiz', function(){
    return view('login.Aprendiz');
});

Route::get('login/Instructor', function(){
    return view('login.Instructor');
});
*/

Route::get('login/{rol}', function ($rol) {
    return view('login/'.$rol);
});


//////////////////////
