<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOpcionRequest;
use App\Http\Requests\UpdateOpcionRequest; // Crear este request
use App\Models\Opcion;
use Illuminate\Http\Request;

class OpcionController extends Controller
{
    public function index()
    {
        $opciones = Opcion::all();
        return response()->json(['message' => 'Lista de opciones obtenida exitosamente', 'data' => $opciones]);
    }

    public function store(StoreOpcionRequest $request)
    {
        $opcion = Opcion::create($request->validated());
        return response()->json(['message' => 'Opción creada exitosamente', 'data' => $opcion], 201);
    }

    public function show($id)
    {
        $opcion = Opcion::findOrFail($id);
        return response()->json(['message' => 'Opción encontrada exitosamente', 'data' => $opcion]);
    }

    public function update(UpdateOpcionRequest $request, $id)
    {
        $opcion = Opcion::findOrFail($id);
        $opcion->update($request->validated());
        return response()->json(['message' => 'Opción actualizada exitosamente', 'data' => $opcion]);
    }

    public function destroy($id)
    {
        $opcion = Opcion::findOrFail($id);
        $opcion->delete();
        return response()->json(['message' => 'Opción eliminada exitosamente']);
    }
}