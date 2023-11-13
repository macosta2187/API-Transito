<?php

namespace App\Http\Controllers;

use App\Models\Camiones;
use Illuminate\Http\Request;

class CamionesController extends Controller
{
    public function Insertar(Request $request)
    {

        $camiones = new Camiones;
        $camiones->id_camion = $request->input('id_camion');     
        $camiones->save();
        

        return response()->json(['message' => 'Camion creado exitosamente'], 200);

    }

    public function Listar()
    {

        $camiones = Camiones::all();
        return response()->json($camiones);
    }

    public function Eliminar(Request $request, $id)
    {

        $camiones = Camiones::find($id);

        if ($camiones) {
            $camiones->delete();
            return response()->json(['error' => 'El camion esta borrado'], 200);
        }

        return response()->json(['error' => 'El camion no existe'], 404);
    }

    public function Editar(Camiones $camiones)
    {
        return view('camiones.Editar', compact('camiones'));
    }

    public function Actualizar(Camiones $request, Camiones $camiones)
    {

        $camiones = new Camiones;
        $camiones->id_camion = $request->input('id_camion');       
        $camiones->save();

        return response()->json($camiones);
    }
}
