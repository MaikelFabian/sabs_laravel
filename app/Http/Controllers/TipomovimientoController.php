<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTipomovimientoRequest;
use App\Http\Requests\UpdateTipomovimientoRequest; // Crear este request
use App\Models\Tipomovimiento;
use Illuminate\Http\Request;

class TipomovimientoController extends Controller
{
    public function index()
    {
        $tipomovimientos = Tipomovimiento::all();
        return response()->json(['message' => 'Lista de tipos de movimiento obtenida exitosamente', 'data' => $tipomovimientos]);
    }

    public function store(StoreTipomovimientoRequest $request)
    {
        $tipomovimiento = Tipomovimiento::create($request->validated());
        return response()->json(['message' => 'Tipo de movimiento creado exitosamente', 'data' => $tipomovimiento], 201);
    }

    public function show($id)
    {
        $tipomovimiento = Tipomovimiento::findOrFail($id);
        return response()->json(['message' => 'Tipo de movimiento encontrado exitosamente', 'data' => $tipomovimiento]);
    }

    public function update(UpdateTipomovimientoRequest $request, $id)
    {
        $tipomovimiento = Tipomovimiento::findOrFail($id);
        $tipomovimiento->update($request->validated());
        return response()->json(['message' => 'Tipo de movimiento actualizado exitosamente', 'data' => $tipomovimiento]);
    }

    public function destroy($id)
    {
        $tipomovimiento = Tipomovimiento::findOrFail($id);
        $tipomovimiento->delete();
        return response()->json(['message' => 'Tipo de movimiento eliminado exitosamente']);
    }
}