<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTipomovimientoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'tipomovimiento' => 'required|string',
            'activo' => 'boolean|nullable',
        ];
    }

    public function messages()
    {
        return [
            'tipomovimiento.required' => 'El tipo de movimiento es obligatorio.',
            'tipomovimiento.string' => 'El tipo de movimiento debe ser texto.',
            'activo.boolean' => 'El estado activo debe ser verdadero o falso.',
        ];
    }
}
