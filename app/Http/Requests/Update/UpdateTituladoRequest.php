<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTituladoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'titulado' => 'sometimes|string',
            'activo' => 'sometimes|boolean|nullable',
            'area' => 'sometimes|exists:areas,idarea',
            'ficha' => 'sometimes|exists:fichas,idficha'
        ];
    }
    public function messages()
    {
        return [
            'titulado.string' => 'El nombre debe ser texto.',
            'activo.boolean' => 'Debe ser verdadero o falso.',
            'area.exists' => 'El área no existe.',
            'ficha.exists' => 'La ficha no existe.'
        ];
    }
}
