<?php

namespace App\Http\Controllers;

use App\Models\Camionero;
use Illuminate\Http\Request;

class CamionerosController extends Controller
{
    public function Insertar(Request $request)
    {

        $camionero = new Camionero;
        $camionero->ci = $request->input('ci');
        $camionero->nombre = $request->input('nombre');
        $camionero->apellido = $request->input('apellido');
        $camionero->celular = $request->input('celular');
        $camionero->email = $request->input('email');
        $camionero->fechanac = $request->input('fechanac');
        $camionero->save();

        return response()->json(['message' => 'Camionero creado exitosamente'], 200);

    }

    public function Listar()
    {

        $camionero = Camionero::all();

        return response()->json($camionero);
    }

    public function Eliminar(Request $request, $id)
    {

        $camionero = Camionero::find($id);

        if ($camionero) {
            $camionero->delete();
            return response()->json(['error' => 'El camionero esta borrado'], 200);
        }

        return response()->json(['error' => 'El camionero no existe'], 404);
    }

    public function Editar(Camionero $camionero)
    {
        return view('camioneros.Editar', compact('camioneros'));
    }

    public function Actualizar(Camionero $request, Camionero $camionero)
    {

        $camionero = new Camionero;
        $camionero->ci = $request->input('ci');
        $camionero->nombre = $request->input('nombre');
        $camionero->apellido = $request->input('apellido');
        $camionero->celular = $request->input('celular');
        $camionero->email = $request->input('email');
        $camionero->fechanac = $request->input('fechanac');
        
        $camionero->save();
        return response()->json($camionero);
    }

}
