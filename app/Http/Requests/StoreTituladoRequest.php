<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTituladoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'titulado' => 'required|string',
            'activo' => 'boolean|nullable',
            'area' => 'required|exists:areas,idarea',
            'ficha' => 'required|exists:fichas,idficha',
        ];
    }

    public function messages()
    {
        return [
            'titulado.required' => 'El nombre del titulado es obligatorio.',
            'titulado.string' => 'El nombre debe ser texto.',
            'activo.boolean' => 'El estado activo debe ser verdadero o falso.',
            'area.required' => 'El área es obligatoria.',
            'area.exists' => 'El área seleccionada no existe.',
            'ficha.required' => 'La ficha es obligatoria.',
            'ficha.exists' => 'La ficha seleccionada no existe.',
        ];
    }
}
