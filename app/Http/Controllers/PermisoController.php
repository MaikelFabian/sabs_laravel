<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePermisoRequest;
use App\Http\Requests\UpdatePermisoRequest; // Crear este request
use App\Models\Permiso;
use Illuminate\Http\Request;

class PermisoController extends Controller
{
    public function index()
    {
        $permisos = Permiso::all();
        return response()->json(['message' => 'Lista de permisos obtenida exitosamente', 'data' => $permisos]);
    }

    public function store(StorePermisoRequest $request)
    {
        $permiso = Permiso::create($request->validated());
        return response()->json(['message' => 'Permiso creado exitosamente', 'data' => $permiso], 201);
    }

    public function show($id)
    {
        $permiso = Permiso::findOrFail($id);
        return response()->json(['message' => 'Permiso encontrado exitosamente', 'data' => $permiso]);
    }

    public function update(UpdatePermisoRequest $request, $id)
    {
        $permiso = Permiso::findOrFail($id);
        $permiso->update($request->validated());
        return response()->json(['message' => 'Permiso actualizado exitosamente', 'data' => $permiso]);
    }

    public function destroy($id)
    {
        $permiso = Permiso::findOrFail($id);
        $permiso->delete();
        return response()->json(['message' => 'Permiso eliminado exitosamente']);
    }
}