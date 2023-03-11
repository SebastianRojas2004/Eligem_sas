<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CargarPdfController;
use App\Http\Controllers\ListadoController;

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

Route::resource('empleados', App\Http\Controllers\EmpleadoController::class)->middleware('auth');

Route::resource('cargarPdf', App\Http\Controllers\CargarPdfController::class)->middleware('auth');
Route::post('EnvioDatos',[CargarPdfController::class,'Insertar']);
Route::resource('listado',App\Http\Controllers\ListadoController::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
