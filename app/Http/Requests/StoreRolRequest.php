<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRolRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nombrerol' => 'required|string',
            'activo' => 'boolean|nullable',
            'permiso' => 'required|exists:permisos,idpermiso',
        ];
    }

    public function messages()
    {
        return [
            'nombrerol.required' => 'El nombre del rol es obligatorio.',
            'nombrerol.string' => 'El nombre debe ser texto.',
            'activo.boolean' => 'El estado activo debe ser verdadero o falso.',
            'permiso.required' => 'El permiso es obligatorio.',
            'permiso.exists' => 'El permiso seleccionado no existe.',
        ];
    }
}