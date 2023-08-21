<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Camiones;

class CamionesController extends Controller
{
    public function Insertar(Request $request)
    {

        $camiones = new Camiones;
        $camiones->matricula = $request->input('matricula');
        $camiones->marca = $request->input('marca');
        $camiones->modelo = $request->input('modelo');
        $camiones->capacidad_peso = $request->input('capacidad_peso');        
        $camiones->save();

        return response()->json(['message' => 'Camion creado exitosamente'], 200);

    }

    public function Listar()
    {

        $camiones = Camiones::all();

        return view('camiones.Listar', ['camiones' => $camiones]);
    }
}
