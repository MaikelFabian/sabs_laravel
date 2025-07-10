<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoriaMaterialRequest;
use App\Http\Requests\UpdateCategoriaMaterialRequest; // Crear este request
use App\Models\CategoriaMaterial;
use Illuminate\Http\Request;

class CategoriaMaterialController extends Controller
{
    public function index()
    {
        $categoriasMateriales = CategoriaMaterial::all();
        return response()->json(['message' => 'Lista de categorías de material obtenida exitosamente', 'data' => $categoriasMateriales]);
    }

    public function store(StoreCategoriaMaterialRequest $request)
    {
        $categoriaMaterial = CategoriaMaterial::create($request->validated());
        return response()->json(['message' => 'Categoría de material creada exitosamente', 'data' => $categoriaMaterial], 201);
    }

    public function show($id)
    {
        $categoriaMaterial = CategoriaMaterial::findOrFail($id);
        return response()->json(['message' => 'Categoría de material encontrada exitosamente', 'data' => $categoriaMaterial]);
    }

    public function update(UpdateCategoriaMaterialRequest $request, $id)
    {
        $categoriaMaterial = CategoriaMaterial::findOrFail($id);
        $categoriaMaterial->update($request->validated());
        return response()->json(['message' => 'Categoría de material actualizada exitosamente', 'data' => $categoriaMaterial]);
    }

    public function destroy($id)
    {
        $categoriaMaterial = CategoriaMaterial::findOrFail($id);
        $categoriaMaterial->delete();
        return response()->json(['message' => 'Categoría de material eliminada exitosamente']);
    }
}