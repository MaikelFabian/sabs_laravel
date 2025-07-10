<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUnidadmedidaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return ['unidadmedida' => 'sometimes|string', 'activo' => 'sometimes|boolean|nullable'];
    }
    public function messages()
    {
        return ['unidadmedida.string' => 'La unidad debe ser texto.', 'activo.boolean' => 'Debe ser verdadero o falso.'];
    }
}
