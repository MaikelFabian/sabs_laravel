<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMunicipioRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'municipio' => 'required|string',
            'activo' => 'boolean|nullable',
        ];
    }

    public function messages()
    {
        return [
            'municipio.required' => 'El nombre del municipio es obligatorio.',
            'municipio.string' => 'El nombre debe ser texto.',
            'activo.boolean' => 'El estado activo debe ser verdadero o falso.',
        ];
    }
}