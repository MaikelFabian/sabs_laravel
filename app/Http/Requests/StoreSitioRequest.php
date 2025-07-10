<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSitioRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'sitio' => 'required|string',
            'activo' => 'boolean|nullable',
            'tipositio' => 'required|exists:tipositios,idtipositio',
        ];
    }

    public function messages()
    {
        return [
            'sitio.required' => 'El nombre del sitio es obligatorio.',
            'sitio.string' => 'El nombre debe ser texto.',
            'activo.boolean' => 'El estado activo debe ser verdadero o falso.',
            'tipositio.required' => 'El tipo de sitio es obligatorio.',
            'tipositio.exists' => 'El tipo de sitio seleccionado no existe.',
        ];
    }
}