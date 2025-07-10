<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFichaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'numficha' => 'required|integer',
            'cantidadaprendices' => 'integer|nullable',
            'activo' => 'boolean|nullable',
        ];
    }

    public function messages()
    {
        return [
            'numficha.required' => 'El número de ficha es obligatorio.',
            'numficha.integer' => 'El número de ficha debe ser un entero.',
            'cantidadaprendices.integer' => 'La cantidad de aprendices debe ser un entero.',
            'activo.boolean' => 'El estado activo debe ser verdadero o falso.',
        ];
    }
}