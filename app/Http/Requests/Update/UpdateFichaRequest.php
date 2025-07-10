<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFichaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'numficha' => 'sometimes|integer',
            'cantidadaprendices' => 'sometimes|integer|nullable',
            'activo' => 'sometimes|boolean|nullable',
        ];
    }

    public function messages()
    {
        return [
            'numficha.integer' => 'El número de ficha debe ser un entero.',
            'cantidadaprendices.integer' => 'La cantidad de aprendices debe ser un entero.',
            'activo.boolean' => 'El estado activo debe ser verdadero o falso.',
        ];
    }
}