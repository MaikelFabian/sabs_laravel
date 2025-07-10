<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAreacentroRequest;
use App\Http\Requests\UpdateAreacentroRequest; // Crear este request
use App\Models\Areacentro;
use Illuminate\Http\Request;

class AreacentroController extends Controller
{
    public function index()
    {
        $areacentros = Areacentro::all();
        return response()->json(['message' => 'Lista de área-centro obtenida exitosamente', 'data' => $areacentros]);
    }

    public function store(StoreAreacentroRequest $request)
    {
        $areacentro = Areacentro::create($request->validated());
        return response()->json(['message' => 'Área-centro creada exitosamente', 'data' => $areacentro], 201);
    }

    public function show($id)
    {
        $areacentro = Areacentro::findOrFail($id);
        return response()->json(['message' => 'Área-centro encontrada exitosamente', 'data' => $areacentro]);
    }

    public function update(UpdateAreacentroRequest $request, $id)
    {
        $areacentro = Areacentro::findOrFail($id);
        $areacentro->update($request->validated());
        return response()->json(['message' => 'Área-centro actualizada exitosamente', 'data' => $areacentro]);
    }

    public function destroy($id)
    {
        $areacentro = Areacentro::findOrFail($id);
        $areacentro->delete();
        return response()->json(['message' => 'Área-centro eliminada exitosamente']);
    }
}