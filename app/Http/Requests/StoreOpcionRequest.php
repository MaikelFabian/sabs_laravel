<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOpcionRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nombre_opcion' => 'required|string|max:100',
            'descripcion' => 'nullable|string',
            'ruta_frontend' => 'required|string|max:150',
            'id_modulo' => 'required|exists:modulos,id',
        ];
    }

    public function messages()
    {
        return [
            'nombre_opcion.required' => 'El nombre de la opción es obligatorio.',
            'nombre_opcion.string' => 'El nombre debe ser texto.',
            'nombre_opcion.max' => 'Máximo 100 caracteres.',
            'descripcion.string' => 'La descripción debe ser texto.',
            'ruta_frontend.required' => 'La ruta frontend es obligatoria.',
            'ruta_frontend.string' => 'La ruta debe ser texto.',
            'ruta_frontend.max' => 'Máximo 150 caracteres.',
            'id_modulo.required' => 'El ID del módulo es obligatorio.',
            'id_modulo.exists' => 'El módulo seleccionado no existe.',
        ];
    }
}
