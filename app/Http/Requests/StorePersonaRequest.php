<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePersonaRequest extends FormRequest
{
    public function authorize()
    {
        return true; 
    }

    public function rules()
    {
        return [
            'identificacion' => 'required|string|unique:personas,identificacion',
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'telefono' => 'nullable|string',
            'correo' => 'required|email|unique:personas,correo',
            'contrasena' => 'required|string|min:6',
            'edad' => 'required|integer|min:0',
            'activo' => 'boolean|nullable',
            'ficha' => 'required|exists:fichas,idficha',
            'rol' => 'required|exists:roles,idrol',
        ];
    }

    public function messages()
    {
        return [
            'identificacion.required' => 'La identificación es obligatoria.',
            'identificacion.unique' => 'La identificación ya está en uso.',
            'nombre.required' => 'El nombre es obligatorio.',
            'apellido.required' => 'El apellido es obligatorio.',
            'correo.required' => 'El correo es obligatorio.',
            'correo.email' => 'El correo debe ser válido.',
            'correo.unique' => 'El correo ya está en uso.',
            'contrasena.required' => 'La contraseña es obligatoria.',
            'contrasena.min' => 'La contraseña debe tener al menos 6 caracteres.',
            'edad.required' => 'La edad es obligatoria.',
            'edad.integer' => 'La edad debe ser un número entero.',
            'edad.min' => 'La edad no puede ser negativa.',
            'ficha.required' => 'La ficha es obligatoria.',
            'ficha.exists' => 'La ficha seleccionada no existe.',
            'rol.required' => 'El rol es obligatorio.',
            'rol.exists' => 'El rol seleccionado no existe.',
        ];
    }
}