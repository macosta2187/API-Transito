<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Camionero;


class CamionerosController extends Controller
{
    public function Insertar(Request $request)
    {

        $camionero = new Camionero;
        $camionero->matricula = $request->input('matricula');
        $camionero->marca = $request->input('marca');
        $camionero->modelo = $request->input('modelo');
        $camionero->capacidad_peso = $request->input('capacidad_peso');          
        $camionero->save();

        return response()->json(['message' => 'Camionero creado exitosamente'], 200);

    }


    public function Listar()
    {

        $producto = Camionero::all();

        return view('camioneros.Listar', ['camioneros' => $camioneros]);
    }


    public function Eliminar(Camionero $camionero)
    {

        $producto->delete();
        return redirect("/");

    }

    public function Editar(Camionero $camionero)
    {
        return view('camioneros.Editar', compact('camioneros'));
    }

    public function Actualizar(Camionero $request, Camionero $camionero)
    {

        $camionero = new Camionero;
        $camionero->matricula = $request->input('matricula');
        $camionero->marca = $request->input('marca');
        $camionero->modelo = $request->input('modelo');
        $camionero->capacidad_peso = $request->input('capacidad_peso'); 
        $camionero->save();

        return redirect("/");
    }


}
