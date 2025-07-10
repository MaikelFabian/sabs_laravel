<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUnidadmedidaRequest;
use App\Http\Requests\UpdateUnidadmedidaRequest; // Crear este request
use App\Models\Unidadmedida;
use Illuminate\Http\Request;

class UnidadmedidaController extends Controller
{
    public function index()
    {
        $unidadmedidas = Unidadmedida::all();
        return response()->json(['message' => 'Lista de unidades de medida obtenida exitosamente', 'data' => $unidadmedidas]);
    }

    public function store(StoreUnidadmedidaRequest $request)
    {
        $unidadmedida = Unidadmedida::create($request->validated());
        return response()->json(['message' => 'Unidad de medida creada exitosamente', 'data' => $unidadmedida], 201);
    }

    public function show($id)
    {
        $unidadmedida = Unidadmedida::findOrFail($id);
        return response()->json(['message' => 'Unidad de medida encontrada exitosamente', 'data' => $unidadmedida]);
    }

    public function update(UpdateUnidadmedidaRequest $request, $id)
    {
        $unidadmedida = Unidadmedida::findOrFail($id);
        $unidadmedida->update($request->validated());
        return response()->json(['message' => 'Unidad de medida actualizada exitosamente', 'data' => $unidadmedida]);
    }

    public function destroy($id)
    {
        $unidadmedida = Unidadmedida::findOrFail($id);
        $unidadmedida->delete();
        return response()->json(['message' => 'Unidad de medida eliminada exitosamente']);
    }
}