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
        $camionero->ci = $request->input('ci');
        $camionero->nombre = $request->input('nombre');
        $camionero->apellido = $request->input('apellido');
        $camionero->celular = $request->input('celular');
        $camionero->email = $request->input('email');
        $camionero->fechanac = $request->input('fechanac');
        
        $camionero->save();

        return redirect("/");
    }

}
