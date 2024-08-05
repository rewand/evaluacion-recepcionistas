<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Recepcionista;
use Illuminate\Http\Request;

class RecepcionistaController extends Controller
{
    public function index()
    {
        $recepcionista = Recepcionista::all();
        return response()->json($recepcionista);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'dni' => 'required|string|max:20|unique:recepcionistas,dni',
        ]);

        $recepcionista = Recepcionista::create($validated);

        return response()->json($recepcionista, 201);
    }

    public function show(Recepcionista $recepcionista)
    {
        return response()->json($recepcionista);
    }

    public function update(Request $request, Recepcionista $recepcionista)
    {
        $validated = $request->validate([
            'nombre' => 'string|max:255',
            'dni' => 'string|max:20|unique:recepcionistas,dni,' . $recepcionista->id,
        ]);

        $recepcionista->update($validated);

        return response()->json($recepcionista);
    }

    public function destroy(Recepcionista $recepcionista)
    {
        $recepcionista->delete();

        return response()->noContent();
    }
}
