<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Transportan;

class TransportanController extends Controller
{

    public function Transportan(Request $request)
    {

        $transportan = new Transportan;
        $transportan->hora = $request->input('hora');
        $transportan->fecha = $request->input('fecha');
        //si cambia status se guarda fecha y hora automatica
        $transportan->status = $request->input('status');
        $transportan->recorrido_realizado = $request->input('recorrido_realizado');        
        $transportan->save();

        return response()->json(['message' => 'Recorrido creado exitosamente'], 200);

    }

    public function Listar()
    {

        $transportan = Transportan::all();
        return response()->json($transportan);
    }


    public function Eliminar(Request $request, $id)
    {

        $transportan = Transportan::find($id);

        if ($transportan) {
            $transportan->delete();
            return response()->json(['error' => 'Borrado'], 200);
        }

        return response()->json(['error' => 'No existe'], 404);
    }


    public function Actualizar(Transportan $request, Transportan $camiones)
    {

        $transportan = new Transportan;
        $transportan->hora = $request->input('hora');
        $transportan->fecha = $request->input('fecha');
        $transportan->status = $request->input('status');
        $transportan->recorrido_realizado = $request->input('recorrido_realizado');        
        $transportan->save();

        return response()->json($transportan);
    }





}
