<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovimientoRequest;
use App\Http\Requests\UpdateMovimientoRequest; // Crear este request
use App\Models\Movimiento;
use Illuminate\Http\Request;

class MovimientoController extends Controller
{
    public function index()
    {
        $movimientos = Movimiento::all();
        return response()->json(['message' => 'Lista de movimientos obtenida exitosamente', 'data' => $movimientos]);
    }

    public function store(StoreMovimientoRequest $request)
    {
        $movimiento = Movimiento::create($request->validated());
        return response()->json(['message' => 'Movimiento creado exitosamente', 'data' => $movimiento], 201);
    }

    public function show($id)
    {
        $movimiento = Movimiento::findOrFail($id);
        return response()->json(['message' => 'Movimiento encontrado exitosamente', 'data' => $movimiento]);
    }

    public function update(UpdateMovimientoRequest $request, $id)
    {
        $movimiento = Movimiento::findOrFail($id);
        $movimiento->update($request->validated());
        return response()->json(['message' => 'Movimiento actualizado exitosamente', 'data' => $movimiento]);
    }

    public function destroy($id)
    {
        $movimiento = Movimiento::findOrFail($id);
        $movimiento->delete();
        return response()->json(['message' => 'Movimiento eliminado exitosamente']);
    }
}