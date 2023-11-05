<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Autenticacion;
use App\Http\Controllers\CamionerosController;
use App\Http\Controllers\CamionesController;
use App\Http\Controllers\TransportanController;
use App\Http\Controllers\PaqueteController;
use App\Http\Controllers\ConformanController;
use App\Http\Controllers\RutaController;
use App\Models\Camiones;
use App\Models\Paquete;



Route::post('/Camionero', [CamionerosController::class, 'Insertar'])->middleware(Autenticacion::class);
Route::get("/Camionero", [CamionerosController::class, "Listar"])->middleware(Autenticacion::class);
Route::delete('/Camionero/{id}', [CamionerosController::class, 'Eliminar'])->middleware(Autenticacion::class);
Route::post('/Camionero/{id}', [CamionerosController::class, 'Actualizar'])->middleware(Autenticacion::class);


Route::post('/Camiones', [CamionesController::class, 'Insertar'])->middleware(Autenticacion::class);
Route::get('/Camiones', [CamionesController::class, 'Listar'])->middleware(Autenticacion::class);
Route::delete('/Camiones/{id}', [CamionesController::class, 'Eliminar'])->middleware(Autenticacion::class);
Route::post('/Camiones/{id}', [CamionesController::class, 'Actualizar'])->middleware(Autenticacion::class);


Route::post('/guardar-transportan', [TransportanController::class, 'guardarTransportan'])->middleware(Autenticacion::class);

Route::get('/en-viaje', [ConformanController::class, 'Listar'])->middleware(Autenticacion::class)->middleware(Autenticacion::class);
Route::put('/ActualizarEstatus/{id}', [ConformanController::class, 'ActualizarEstatus'])->middleware(Autenticacion::class);

Route::get('/obtenerEstadoPorPaqueteId/{paqueteId}', [PaqueteController::class, 'obtenerEstadoPorPaqueteId']);



Route::get('/listar-rutas/{searchId}', [RutaController::class, 'listarRutas'])->name('listar.rutas');
Route::get('paquetes-en-transito', [PaqueteController::class, 'listarPaquetesEnTransito']);


