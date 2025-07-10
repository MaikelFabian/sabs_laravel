<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTipoMaterialRequest;
use App\Http\Requests\UpdateTipoMaterialRequest; // Crear este request
use App\Models\TipoMaterial;
use Illuminate\Http\Request;

class TipoMaterialController extends Controller
{
    public function index()
    {
        $tiposMateriales = TipoMaterial::all();
        return response()->json(['message' => 'Lista de tipos de material obtenida exitosamente', 'data' => $tiposMateriales]);
    }

    public function store(StoreTipoMaterialRequest $request)
    {
        $tipoMaterial = TipoMaterial::create($request->validated());
        return response()->json(['message' => 'Tipo de material creado exitosamente', 'data' => $tipoMaterial], 201);
    }

    public function show($id)
    {
        $tipoMaterial = TipoMaterial::findOrFail($id);
        return response()->json(['message' => 'Tipo de material encontrado exitosamente', 'data' => $tipoMaterial]);
    }

    public function update(UpdateTipoMaterialRequest $request, $id)
    {
        $tipoMaterial = TipoMaterial::findOrFail($id);
        $tipoMaterial->update($request->validated());
        return response()->json(['message' => 'Tipo de material actualizado exitosamente', 'data' => $tipoMaterial]);
    }

    public function destroy($id)
    {
        $tipoMaterial = TipoMaterial::findOrFail($id);
        $tipoMaterial->delete();
        return response()->json(['message' => 'Tipo de material eliminado exitosamente']);
    }
}