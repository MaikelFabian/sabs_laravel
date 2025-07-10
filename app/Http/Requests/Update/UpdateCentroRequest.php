<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCentroRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'centro' => 'sometimes|string',
            'activo' => 'sometimes|boolean|nullable',
            'municipio' => 'sometimes|exists:municipios,idmunicipio'
        ];
    }
    public function messages()
    {
        return [
            'centro.string' => 'El nombre debe ser texto.',
            'activo.boolean' => 'Debe ser verdadero o falso.',
            'municipio.exists' => 'El municipio no existe.'
        ];
    }
}
