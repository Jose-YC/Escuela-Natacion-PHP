<?php

use App\Models\Horario;
use App\Models\Horas__disponible;
use App\Models\Persona;
use App\Models\User;
use App\Models\Hora_Disponible__Horarios;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\AdministrativoController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\BancoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PisinaController;
use App\Http\Controllers\HoraDisponibleHorariosController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\HorasDisponibleController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\DescuentoController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\InscripcionController;
use App\Http\Controllers\ReciboController;

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
})->name('welcome');

Route::get('home', function () {return view('home');})->name('home');

Route::middleware('auth')->group(
    function () {

        Route::resource('piscina', PisinaController::class)->names('piscinas');
        Route::resource('horas', HorasDisponibleController::class)->names('horas');
        Route::resource('horarios', HorarioController::class)->names('horarios');
        Route::resource('horariosdefinidos', HoraDisponibleHorariosController::class)->names('horariosdefinidos');
        Route::resource('personas', PersonaController::class)->names('personas');
        Route::resource('descuentos', DescuentoController::class)->names('descuentos');
        Route::resource('empleados', EmpleadoController::class)->names('empleados');
        Route::resource('administrativos', AdministrativoController::class)->names('administrativos');
        Route::resource('profesores', ProfesorController::class)->names('profesores');
        Route::resource('alumnos',AlumnoController::class)->names('alumnos');
        Route::resource('inscripciones', InscripcionController::class)->names('inscripciones');
        Route::resource('recibos',ReciboController::class)->names('recibos');
        Route::resource('bancos',BancoController::class)->names('bancos');
        // Route::resource('recibo',ReciboController::class ,[
        //     'parameters' => [
        //         'recibo' => 'id'
        //     ]
        // ])->names('recibo');


    }

);

Route::get('inscripciones/{inscripcion}/pdf', [InscripcionController::class,'generate'])->name('inscripciones.pdf');







Route::get('users/register', [UserController::class, 'create'])->name('register');
Route::post('users/register', [UserController::class, 'store'])->name('register');


Route::get('users/login', [LoginController::class, 'login'])->name('login');
Route::post('users/login', [LoginController::class, 'logout'])->name('logout');
Route::post('/', [LoginController::class, 'loginPost'])->name('loginPost');


//return $datos;
//$user1= User::find(1)->persona;
//  $user1= Persona::find(1)->user->id;
//    $datos= Horas__disponible::find(2)->horarios;
//     $datos1= Horario::find(4)->horas_disponibles_horarios;//id que se seleeciona es el que pides de ese modelo

//return  $user1;
//     return  $datos1;
