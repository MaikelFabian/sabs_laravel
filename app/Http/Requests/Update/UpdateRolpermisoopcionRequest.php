<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRolPermisoOpcionRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return ['id_rol' => 'sometimes|exists:roles,idrol', 'id_permiso' => 'sometimes|exists:permisos,idpermiso', 'id_opcion' => 'sometimes|exists:opciones,idopcion', 'activo' => 'sometimes|boolean|nullable'];
    }
    public function messages()
    {
        return ['id_rol.exists' => 'El rol no existe.', 'id_permiso.exists' => 'El permiso no existe.', 'id_opcion.exists' => 'La opción no existe.', 'activo.boolean' => 'Debe ser verdadero o falso.'];
    }
}
