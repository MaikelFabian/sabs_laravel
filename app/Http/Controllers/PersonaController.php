<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePersonaRequest;
use App\Http\Requests\UpdatePersonaRequest; // Crear este request
use App\Models\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PersonaController extends Controller
{
    public function index()
    {
        $personas = Persona::all();
        return response()->json(['message' => 'Lista de personas obtenida exitosamente', 'data' => $personas]);
    }

    public function store(StorePersonaRequest $request)
    {
        $data = $request->validated();
        $data['contrasena'] = Hash::make($data['contrasena']);
        $persona = Persona::create($data);
        return response()->json(['message' => 'Persona creada exitosamente', 'data' => $persona], 201);
    }

    public function show($id)
    {
        $persona = Persona::findOrFail($id);
        return response()->json(['message' => 'Persona encontrada exitosamente', 'data' => $persona]);
    }

    public function update(UpdatePersonaRequest $request, $id)
    {
        $persona = Persona::findOrFail($id);
        $data = $request->validated();
        if (isset($data['contrasena'])) {
            $data['contrasena'] = Hash::make($data['contrasena']);
        }
        $persona->update($data);
        return response()->json(['message' => 'Persona actualizada exitosamente', 'data' => $persona]);
    }

    public function destroy($id)
    {
        $persona = Persona::findOrFail($id);
        $persona->delete();
        return response()->json(['message' => 'Persona eliminada exitosamente']);
    }
}