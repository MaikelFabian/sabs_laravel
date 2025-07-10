<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTipoMaterialRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return ['tipo' => 'sometimes|string', 'activo' => 'sometimes|boolean|nullable'];
    }
    public function messages()
    {
        return ['tipo.string' => 'El tipo debe ser texto.', 'activo.boolean' => 'Debe ser verdadero o falso.'];
    }
}
