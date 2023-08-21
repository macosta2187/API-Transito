<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Autenticacion;
use App\Http\Controllers\CamionerosController;


/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

*/

Route::post('/Camionero', [CamionerosController::class, 'Insertar'])->middleware(Autenticacion::class);
Route::get("/Camionero", [CamionerosController::class, "Listar"])->middleware(Autenticacion::class);
Route::delete('/Camionero/{id}', [CamionerosController::class, 'Eliminar'])->middleware(Autenticacion::class);
Route::post('/Camionero/{id}', [CamionerosController::class, 'Actualizar'])->middleware(Autenticacion::class);