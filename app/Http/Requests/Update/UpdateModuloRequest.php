<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateModuloRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return ['nombre_modulo' => 'sometimes|string|max:100'];
    }
    public function messages()
    {
        return ['nombre_modulo.string' => 'El nombre debe ser texto.', 'nombre_modulo.max' => 'Máximo 100 caracteres.'];
    }
}
