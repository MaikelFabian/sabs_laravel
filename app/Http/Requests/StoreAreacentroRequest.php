<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAreacentroRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'activo' => 'boolean|nullable',
            'area' => 'required|exists:areas,idarea',
            'centro' => 'required|exists:centros,idcentro',
        ];
    }

    public function messages()
    {
        return [
            'activo.boolean' => 'El estado activo debe ser verdadero o falso.',
            'area.required' => 'El área es obligatoria.',
            'area.exists' => 'El área seleccionada no existe.',
            'centro.required' => 'El centro es obligatorio.',
            'centro.exists' => 'El centro seleccionado no existe.',
        ];
    }
}