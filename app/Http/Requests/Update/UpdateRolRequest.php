<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRolRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return ['nombrerol' => 'sometimes|string', 'activo' => 'sometimes|boolean|nullable', 'permiso' => 'sometimes|exists:permisos,idpermiso'];
    }
    public function messages()
    {
        return ['nombrerol.string' => 'El nombre debe ser texto.', 'activo.boolean' => 'Debe ser verdadero o falso.', 'permiso.exists' => 'El permiso no existe.'];
    }
}
