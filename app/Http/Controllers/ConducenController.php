<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConducenController extends Controller
{
    public function Insertar(Request $request)
    {

        $conducen = new Conducen;
        $conducen->matricula = $request->input('matricula');
        $conducen->nombre = $request->input('nombre');
        $conducen->apellido = $request->input('apellido');    
        $conducen->save();

        return response()->json(['message' => 'Camionero creado exitosamente'], 200);

    }
}
