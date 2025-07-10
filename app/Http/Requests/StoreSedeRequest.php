<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSedeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'sede' => 'required|string',
            'direccion' => 'required|string',
            'activo' => 'boolean|nullable',
            'centro' => 'required|exists:centros,idcentro',
        ];
    }

    public function messages()
    {
        return [
            'sede.required' => 'El nombre de la sede es obligatorio.',
            'sede.string' => 'El nombre de la sede debe ser texto.',
            'direccion.required' => 'La dirección es obligatoria.',
            'direccion.string' => 'La dirección debe ser texto.',
            'activo.boolean' => 'El estado activo debe ser verdadero o falso.',
            'centro.required' => 'El centro es obligatorio.',
            'centro.exists' => 'El centro seleccionado no existe.',
        ];
    }
}
