<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CargarPdfController;
use App\Http\Controllers\ListadoController; 
use App\Http\Controllers\formularioController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

// Vista Empleados
Route::resource('empleados', App\Http\Controllers\EmpleadoController::class)->middleware('auth');

// Vistas PDF
Route::resource('cargarPdf', App\Http\Controllers\CargarPdfController::class)->middleware('auth');
Route::resource('index', App\Http\Controllers\CargarPdfController::class)->middleware('auth');
Route::resource('listado', App\Http\Controllers\CargarPdfController::class)->middleware('auth');

Route::post('EnvioDatos',[CargarPdfController::class,'Insertar']);
Route::resource('listado',App\Http\Controllers\ListadoController::class)->middleware('auth');

// Vistas Usuarios
Route::get('usuarios',[UsuariosController::class,'index']);

// Vista formulario
Route::resource('/formulario', formularioController::class);
Route::get('/formulario',[formularioController::class,'index']);
Route::get('/create',[formularioController::class,'create']);

// Vista inicio Empleados
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Vista inicio Administradores
Route::get('admin', [App\Http\Controllers\HomeController::class, 'indexAdmin'])->name('admin');
