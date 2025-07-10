<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCentroRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'centro' => 'required|string',
            'activo' => 'boolean|nullable',
            'municipio' => 'required|exists:municipios,idmunicipio',
        ];
    }

    public function messages()
    {
        return [
            'centro.required' => 'El nombre del centro es obligatorio.',
            'centro.string' => 'El nombre debe ser texto.',
            'activo.boolean' => 'El estado activo debe ser verdadero o falso.',
            'municipio.required' => 'El municipio es obligatorio.',
            'municipio.exists' => 'El municipio seleccionado no existe.',
        ];
    }
}