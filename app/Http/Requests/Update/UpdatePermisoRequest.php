<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePermisoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return ['nombre' => 'sometimes|string', 'descripcion' => 'sometimes|string|nullable', 'codigo' => 'sometimes|string|unique:permisos,codigo,' . $this->idpermiso, 'activo' => 'sometimes|boolean|nullable', 'id_opcion' => 'sometimes|exists:opciones,id'];
    }
    public function messages()
    {
        return ['nombre.string' => 'El nombre debe ser texto.', 'descripcion.string' => 'La descripción debe ser texto.', 'codigo.string' => 'El código debe ser texto.', 'codigo.unique' => 'El código ya está en uso.', 'activo.boolean' => 'Debe ser verdadero o falso.', 'id_opcion.exists' => 'La opción no existe.'];
    }
}
