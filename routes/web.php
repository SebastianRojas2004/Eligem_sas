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
    return view('welcome');
});

Auth::routes();

// Vista Login
Route::get('/login', function () {
    return view('auth.login');
});

Auth::routes();

// Vista Empleados
Route::resource('empleados', App\Http\Controllers\EmpleadoController::class)->middleware('auth');

// Vistas PDF
Route::resource('cargarPdf', App\Http\Controllers\CargarPdfController::class)->middleware('auth');  
Route::post('EnvioDatos',[CargarPdfController::class,'Insertar']);
Route::get('/cargar-pdf', [CargarPdfController::class, 'listado'])->name('cargarPdf.listado');


// Vistas Usuarios
Route::resource('usuarios', App\Http\Controllers\UsuariosController::class)->middleware('auth');
Route::get('Usuario',[UsuariosController::class,'index']);
Route::patch('usuarios/{id}',[UsuariosController::class,'update'])->name('id.edit');

// Vista formulario
Route::resource('/formulario', formularioController::class)->middleware('auth');
Route::get('/formulario',[formularioController::class,'index']);
Route::get('/create',[formularioController::class,'create']);

// Vista Excel
Route::post('/exportar-tabla',[formularioController::class,'exportarTablaEntreFechas'])->middleware('auth');

// Vista inicio Empleados
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Vista inicio Administradores
Route::get('admin', [App\Http\Controllers\HomeController::class, 'indexAdmin'])->name('admin')->middleware('auth');