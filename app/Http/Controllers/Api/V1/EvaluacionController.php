<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Evaluacion;
use Illuminate\Http\Request;

class EvaluacionController extends Controller
{
    public function index()
    {
        return response()->json(Evaluacion::all());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'recepcionista_id' => 'required|exists:recepcionistas,id',
            'amabilidad' => 'required|integer|min:1|max:10',
            'eficiencia' => 'required|integer|min:1|max:10',
            'presentacion' => 'required|integer|min:1|max:10',
            'conocimiento_menu' => 'required|integer|min:1|max:10',
            'tiempo_espera' => 'required|integer|min:1|max:10',
        ]);

        $evaluacion = Evaluacion::create($validated);

        return response()->json($evaluacion, 201);
    }

    public function show(Evaluacion $evaluacion)
    {
        return response()->json($evaluacion);
    }

    public function update(Request $request, Evaluacion $evaluacion)
    {
        $validated = $request->validate([
            'amabilidad' => 'integer|min:1|max:10',
            'eficiencia' => 'integer|min:1|max:10',
            'presentacion' => 'integer|min:1|max:10',
            'conocimiento_menu' => 'integer|min:1|max:10',
            'tiempo_espera' => 'integer|min:1|max:10',
        ]);

        $evaluacion->update($validated);

        return response()->json($evaluacion);
    }

    public function destroy(Evaluacion $evaluacion)
    {
        $evaluacion->delete();

        return response()->noContent();
    }
}
