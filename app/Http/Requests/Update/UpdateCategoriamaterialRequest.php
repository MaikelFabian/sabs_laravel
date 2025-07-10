<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoriaMaterialRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return ['codigo_material' => 'sometimes|string', 'categoria' => 'sometimes|string', 'activo' => 'sometimes|boolean|nullable'];
    }
    public function messages()
    {
        return ['codigo_material.string' => 'El código debe ser texto.', 'categoria.string' => 'La categoría debe ser texto.', 'activo.boolean' => 'Debe ser verdadero o falso.'];
    }
}
