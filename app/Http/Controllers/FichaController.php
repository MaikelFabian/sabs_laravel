<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFichaRequest;
use App\Http\Requests\UpdateFichaRequest;
use App\Models\Ficha;
use Illuminate\Http\Request;

class FichaController extends Controller
{
    public function index()
    {
        $fichas = Ficha::all();
        return response()->json([
            'message' => 'Lista de fichas obtenida exitosamente',
            'data' => $fichas
        ]);
    }

    public function store(StoreFichaRequest $request)
    {
        $ficha = Ficha::create($request->validated());
        return response()->json([
            'message' => 'Ficha creada exitosamente',
            'data' => $ficha
        ], 201);
    }

    public function show($id)
    {
        $ficha = Ficha::findOrFail($id);
        return response()->json([
            'message' => 'Ficha encontrada exitosamente',
            'data' => $ficha
        ]);
    }

    public function update(UpdateFichaRequest $request, $id)
    {
        $ficha = Ficha::findOrFail($id);
        $ficha->update($request->validated());
        return response()->json([
            'message' => 'Ficha actualizada exitosamente',
            'data' => $ficha
        ]);
    }

    public function destroy($id)
    {
        $ficha = Ficha::findOrFail($id);
        $ficha->delete();
        return response()->json([
            'message' => 'Ficha eliminada exitosamente'
        ], 200);
    }
}
