<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovimientoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'activo' => 'boolean|nullable',
            'movimientopersona' => 'required|exists:personas,idpersona',
            'tipomovimiento' => 'required|exists:tipomovimientos,idtipomovimiento',
        ];
    }

    public function messages()
    {
        return [
            'activo.boolean' => 'El estado activo debe ser verdadero o falso.',
            'movimientopersona.required' => 'La persona es obligatoria.',
            'movimientopersona.exists' => 'La persona seleccionada no existe.',
            'tipomovimiento.required' => 'El tipo de movimiento es obligatorio.',
            'tipomovimiento.exists' => 'El tipo de movimiento seleccionado no existe.',
        ];
    }
}