<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUnidadmedidaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'unidadmedida' => 'required|string',
            'activo' => 'boolean|nullable',
        ];
    }

    public function messages()
    {
        return [
            'unidadmedida.required' => 'La unidad de medida es obligatoria.',
            'unidadmedida.string' => 'La unidad debe ser texto.',
            'activo.boolean' => 'El estado activo debe ser verdadero o falso.',
        ];
    }
}   