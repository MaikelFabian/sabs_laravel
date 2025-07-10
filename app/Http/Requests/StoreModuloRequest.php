<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreModuloRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Cambia a false o lógica si necesitas permisos
    }

    public function rules()
    {
        return [
            'nombre_modulo' => 'required|string|max:100',
        ];
    }

    public function messages()
    {
        return [
            'nombre_modulo.required' => 'El nombre del módulo es obligatorio.',
            'nombre_modulo.string' => 'El nombre debe ser texto.',
            'nombre_modulo.max' => 'El nombre no puede exceder 100 caracteres.',
        ];
    }
}