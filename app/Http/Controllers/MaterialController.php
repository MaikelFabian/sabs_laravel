<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMaterialRequest;
use App\Http\Requests\UpdateMaterialRequest; // Crear este request
use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index()
    {
        $materiales = Material::all();
        return response()->json(['message' => 'Lista de materiales obtenida exitosamente', 'data' => $materiales]);
    }

    public function store(StoreMaterialRequest $request)
    {
        $material = Material::create($request->validated());
        return response()->json(['message' => 'Material creado exitosamente', 'data' => $material], 201);
    }

    public function show($id)
    {
        $material = Material::findOrFail($id);
        return response()->json(['message' => 'Material encontrado exitosamente', 'data' => $material]);
    }

    public function update(UpdateMaterialRequest $request, $id)
    {
        $material = Material::findOrFail($id);
        $material->update($request->validated());
        return response()->json(['message' => 'Material actualizado exitosamente', 'data' => $material]);
    }

    public function destroy($id)
    {
        $material = Material::findOrFail($id);
        $material->delete();
        return response()->json(['message' => 'Material eliminado exitosamente']);
    }
}