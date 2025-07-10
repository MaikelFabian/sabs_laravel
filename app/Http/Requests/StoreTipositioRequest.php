<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTipositioRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'tipositio' => 'required|string',
            'activo' => 'boolean|nullable',
        ];
    }

    public function messages()
    {
        return [
            'tipositio.required' => 'El tipo de sitio es obligatorio.',
            'tipositio.string' => 'El tipo debe ser texto.',
            'activo.boolean' => 'El estado activo debe ser verdadero o falso.',
        ];
    }
}