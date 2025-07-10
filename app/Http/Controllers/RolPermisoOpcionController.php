<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRolPermisoOpcionRequest;
use App\Http\Requests\UpdateRolPermisoOpcionRequest; // Crear este request
use App\Models\RolPermisoOpcion;
use Illuminate\Http\Request;

class RolPermisoOpcionController extends Controller
{
    public function index()
    {
        $rolPermisoOpciones = RolPermisoOpcion::all();
        return response()->json(['message' => 'Lista de rol_permiso_opcion obtenida exitosamente', 'data' => $rolPermisoOpciones]);
    }

    public function store(StoreRolPermisoOpcionRequest $request)
    {
        $rolPermisoOpcion = RolPermisoOpcion::create($request->validated());
        return response()->json(['message' => 'RolPermisoOpcion creado exitosamente', 'data' => $rolPermisoOpcion], 201);
    }

    public function show($id)
    {
        $rolPermisoOpcion = RolPermisoOpcion::findOrFail($id);
        return response()->json(['message' => 'RolPermisoOpcion encontrado exitosamente', 'data' => $rolPermisoOpcion]);
    }

    public function update(UpdateRolPermisoOpcionRequest $request, $id)
    {
        $rolPermisoOpcion = RolPermisoOpcion::findOrFail($id);
        $rolPermisoOpcion->update($request->validated());
        return response()->json(['message' => 'RolPermisoOpcion actualizado exitosamente', 'data' => $rolPermisoOpcion]);
    }

    public function destroy($id)
    {
        $rolPermisoOpcion = RolPermisoOpcion::findOrFail($id);
        $rolPermisoOpcion->delete();
        return response()->json(['message' => 'RolPermisoOpcion eliminado exitosamente']);
    }
}