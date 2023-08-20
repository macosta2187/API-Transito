<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Camionero;


class CamionerosController extends Controller
{
    public function Insertar(Request $request)
    {

        $camionero = new Camionero;
        $camionero->libreta_vencimiento = $request->input('libreta_vencimiento');
        $camionero->id_chofer = $request->input('id_chofer');        
        $camionero->save();

        return response()->json(['message' => 'Camionero creado exitosamente'], 200);

    }
}
