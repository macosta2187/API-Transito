<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conforman;

class ConformanController extends Controller
{
    public function Listar()
    {
        $conforman = Conforman::all();
        return response()->json($conforman);
    }

    public function ActualizarEstatus(Request $request, $id)
    {
        $conforman = Conforman::find($id);

        if (!$conforman) {
            return response()->json(['message' => 'Paquete no encontrado'], 404);
        }

        $nuevoEstatus = $request->input('nuevoEstatus');

        $estatusPermitidos = ['En Viaje', 'Despachado', 'Entregado'];

        if (!in_array($nuevoEstatus, $estatusPermitidos)) {
            return response()->json(['message' => 'Estatus no válido'], 400);
        }

        $conforman->estatus_conforman = $nuevoEstatus;
        $conforman->save();

        return response()->json(['message' => 'Estatus actualizado correctamente'], 200);
    }
}