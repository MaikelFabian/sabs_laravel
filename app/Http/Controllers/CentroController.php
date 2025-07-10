<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCentroRequest;
use App\Http\Requests\UpdateCentroRequest; // Crear este request
use App\Models\Centro;
use Illuminate\Http\Request;

class CentroController extends Controller
{
    public function index()
    {
        $centros = Centro::all();
        return response()->json(['message' => 'Lista de centros obtenida exitosamente', 'data' => $centros]);
    }

    public function store(StoreCentroRequest $request)
    {
        $centro = Centro::create($request->validated());
        return response()->json(['message' => 'Centro creado exitosamente', 'data' => $centro], 201);
    }

    public function show($id)
    {
        $centro = Centro::findOrFail($id);
        return response()->json(['message' => 'Centro encontrado exitosamente', 'data' => $centro]);
    }

    public function update(UpdateCentroRequest $request, $id)
    {
        $centro = Centro::findOrFail($id);
        $centro->update($request->validated());
        return response()->json(['message' => 'Centro actualizado exitosamente', 'data' => $centro]);
    }

    public function destroy($id)
    {
        $centro = Centro::findOrFail($id);
        $centro->delete();
        return response()->json(['message' => 'Centro eliminado exitosamente']);
    }
}