<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTipositioRequest;
use App\Http\Requests\UpdateTipositioRequest; // Crear este request
use App\Models\Tipositio;
use Illuminate\Http\Request;

class TipositioController extends Controller
{
    public function index()
    {
        $tipositios = Tipositio::all();
        return response()->json(['message' => 'Lista de tipos de sitio obtenida exitosamente', 'data' => $tipositios]);
    }

    public function store(StoreTipositioRequest $request)
    {
        $tipositio = Tipositio::create($request->validated());
        return response()->json(['message' => 'Tipo de sitio creado exitosamente', 'data' => $tipositio], 201);
    }

    public function show($id)
    {
        $tipositio = Tipositio::findOrFail($id);
        return response()->json(['message' => 'Tipo de sitio encontrado exitosamente', 'data' => $tipositio]);
    }

    public function update(UpdateTipositioRequest $request, $id)
    {
        $tipositio = Tipositio::findOrFail($id);
        $tipositio->update($request->validated());
        return response()->json(['message' => 'Tipo de sitio actualizado exitosamente', 'data' => $tipositio]);
    }

    public function destroy($id)
    {
        $tipositio = Tipositio::findOrFail($id);
        $tipositio->delete();
        return response()->json(['message' => 'Tipo de sitio eliminado exitosamente']);
    }
}