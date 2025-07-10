<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoriaMaterialRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'codigo_material' => 'required|string',
            'categoria' => 'required|string',
            'activo' => 'boolean|nullable',
        ];
    }

    public function messages()
    {
        return [
            'codigo_material.required' => 'El código de material es obligatorio.',
            'codigo_material.string' => 'El código debe ser texto.',
            'categoria.required' => 'La categoría es obligatoria.',
            'categoria.string' => 'La categoría debe ser texto.',
            'activo.boolean' => 'El estado activo debe ser verdadero o falso.',
        ];
    }
}
