<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRolPermisoOpcionRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id_rol' => 'required|exists:roles,idrol',
            'id_permiso' => 'required|exists:permisos,idpermiso',
            'id_opcion' => 'required|exists:opciones,idopcion',
            'activo' => 'boolean|nullable',
        ];
    }

    public function messages()
    {
        return [
            'id_rol.required' => 'El ID del rol es obligatorio.',
            'id_rol.exists' => 'El rol seleccionado no existe.',
            'id_permiso.required' => 'El ID del permiso es obligatorio.',
            'id_permiso.exists' => 'El permiso seleccionado no existe.',
            'id_opcion.required' => 'El ID de la opción es obligatorio.',
            'id_opcion.exists' => 'La opción seleccionada no existe.',
            'activo.boolean' => 'El estado activo debe ser verdadero o falso.',
        ];
    }
}