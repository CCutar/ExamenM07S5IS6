<?php

namespace App\Http\Controllers;

use App\Models\Atleta;
use Illuminate\Http\Request;

class AtletaController extends Controller
{
    // Obtener la lista de atletas de un club
    public function index($club)
    {
        $atletas = Atleta::where('club_id', $club)->get();
        return response()->json($atletas);
    }

    // Obtener el detalle de un atleta de un club
    public function show($club, $atleta)
    {
        $atleta = Atleta::where('club_id', $club)->findOrFail($atleta);
        return response()->json($atleta);
    }

    // Agregar un atleta a un club
    public function store(Request $request, $club)
    {
        $atleta = new Atleta();
        $atleta->nom = $request->input('nom');
        $atleta->cognoms = $request->input('cognoms');
        $atleta->club_id = $club;
        $atleta->save();
        return response()->json($atleta, 201);
    }

    // Modificar los datos de un atleta de un club
    public function update(Request $request, $club, $atleta)
    {
        $atleta = Atleta::where('club_id', $club)->findOrFail($atleta);
        $atleta->update($request->all());
        return response()->json($atleta, 200);
    }

    // Eliminar un atleta de un club
    public function destroy($club, $atleta)
    {
        $atleta = Atleta::where('club_id', $club)->findOrFail($atleta);
        $atleta->delete();
        return response()->json(null, 204);
    }
}
