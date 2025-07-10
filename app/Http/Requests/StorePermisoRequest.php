<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePermisoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nombre' => 'required|string',
            'descripcion' => 'nullable|string',
            'codigo' => 'required|string|unique:permisos,codigo',
            'activo' => 'boolean|nullable',

        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El nombre del permiso es obligatorio.',
            'nombre.string' => 'El nombre debe ser texto.',
            'descripcion.string' => 'La descripción debe ser texto.',
            'codigo.required' => 'El código es obligatorio.',
            'codigo.string' => 'El código debe ser texto.',
            'codigo.unique' => 'El código ya está en uso.',
            'activo.boolean' => 'El estado activo debe ser verdadero o falso.',


        ];
    }
}
