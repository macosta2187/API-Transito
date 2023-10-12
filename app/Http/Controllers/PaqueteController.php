<?php

namespace App\Http\Controllers;

use App\Models\Paquete;
use Illuminate\Http\Request;

class PaqueteController extends Controller
{

    /*
    public function Listar()
    {
        $paquetes = Paquete::all();
        return response()->json($paquetes);
    }

    public function ActualizarEstatus(Request $request, $id)
    {
        $paquete = Paquete::find($id);

        if (!$paquete) {
            return response()->json(['message' => 'Paquete no encontrado'], 404);
        }

        $nuevoEstatus = $request->input('estatus');
        $estatusPermitidos = ['En Viaje', 'Despachado', 'Entregado'];

        if (!in_array($nuevoEstatus, $estatusPermitidos)) {
            return response()->json(['message' => 'Estatus no válido'], 400);
        }

        $paquete->estatus = $nuevoEstatus;
        $paquete->save();

        return response()->json(['message' => 'Estatus actualizado correctamente'], 200);
    }
    */

}
