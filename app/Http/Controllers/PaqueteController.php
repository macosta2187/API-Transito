<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paquete;

class PaqueteController extends Controller
{

    public function obtenerEstadoPorPaqueteId(Request $request, $codigo_seguimiento)
    {
       
        if (empty($codigo_seguimiento)) {
            return response()->json(['error' => 'Código de seguimiento no válido'], 400);
        }
    
        $estado = $this->obtenerEstadoDeBaseDeDatos($codigo_seguimiento);    
     
        if ($estado === 'Estado no encontrado') {
            return response()->json(['error' => 'Estado no encontrado'], 404); 
        }
    
        return response()->json(['codigo_seguimiento' => $codigo_seguimiento, 'estado' => $estado]);
    }
    
    private function obtenerEstadoDeBaseDeDatos($codigo_seguimiento) {        
        $paquete = Paquete::where('codigo_seguimiento', $codigo_seguimiento)->first();
    
        if ($paquete) {           
            return $paquete->estado;
        } else {
            return 'Estado no encontrado';
        }
    }
    
    
  

}
