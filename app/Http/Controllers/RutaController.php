<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Camiones;
use App\Models\Ruta;
use App\Models\Paquete;
use App\Models\Almacen;

class RutaController extends Controller
{



public function listarRutas($idPaquete)
{
    $estado = "En tránsito";
    //$idPaquete = 16;
    
    $montevideo = Almacen::where('departamento', 'Montevideo')->first();

    if (!$montevideo) {
        return response()->json(['error' => 'Ubicación de Montevideo no encontrada'], 404);
    }

   
    $paquete = Paquete::where('id', $idPaquete)
        ->where('estado', $estado)
        ->first();

    if (!$paquete) {
        return response()->json(['error' => 'Paquete no encontrado'], 404);
    }

    
    $destino = Almacen::where('departamento', $paquete->departamento)->first();

    if (!$destino) {
        return response()->json(['error' => 'Ubicación del almacén de destino no encontrada'], 404);
    }

    
    $response = [
        'origen' => [
            'latitud' => $montevideo->latitud,
            'longitud' => $montevideo->longitud,
            'nombre' => $montevideo->nombre,
        ],
        'destino' => [
            'latitud' => $destino->latitud,
            'longitud' => $destino->longitud,
            'nombre' => $destino->nombre,
        ],
      
    ];

    return response()->json($response);
}







}
