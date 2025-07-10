<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDetallesRequest;
use App\Http\Requests\UpdateDetallesRequest; // Crear este request
use App\Models\Detalles;
use Illuminate\Http\Request;

class DetallesController extends Controller
{
    public function index()
    {
        $detalles = Detalles::all();
        return response()->json(['message' => 'Lista de detalles obtenida exitosamente', 'data' => $detalles]);
    }

    public function store(StoreDetallesRequest $request)
    {
        $detalle = Detalles::create($request->validated());
        return response()->json(['message' => 'Detalle creado exitosamente', 'data' => $detalle], 201);
    }

    public function show($id)
    {
        $detalle = Detalles::findOrFail($id);
        return response()->json(['message' => 'Detalle encontrado exitosamente', 'data' => $detalle]);
    }

    public function update(UpdateDetallesRequest $request, $id)
    {
        $detalle = Detalles::findOrFail($id);
        $detalle->update($request->validated());
        return response()->json(['message' => 'Detalle actualizado exitosamente', 'data' => $detalle]);
    }

    public function destroy($id)
    {
        $detalle = Detalles::findOrFail($id);
        $detalle->delete();
        return response()->json(['message' => 'Detalle eliminado exitosamente']);
    }
}