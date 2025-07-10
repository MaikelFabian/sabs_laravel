<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePersonaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return ['identificacion' => 'sometimes|string|unique:personas,identificacion,' . $this->idpersona, 'nombre' => 'sometimes|string', 'apellido' => 'sometimes|string', 'telefono' => 'sometimes|string|nullable', 'correo' => 'sometimes|email|unique:personas,correo,' . $this->idpersona, 'contrasena' => 'sometimes|string|min:6', 'edad' => 'sometimes|integer|min:0', 'activo' => 'sometimes|boolean|nullable', 'ficha' => 'sometimes|exists:fichas,idficha', 'rol' => 'sometimes|exists:roles,idrol'];
    }
    public function messages()
    {
        return ['identificacion.unique' => 'La identificación ya está en uso.', 'nombre.string' => 'El nombre debe ser texto.', 'apellido.string' => 'El apellido debe ser texto.', 'correo.email' => 'El correo debe ser válido.', 'correo.unique' => 'El correo ya está en uso.', 'contrasena.min' => 'La contraseña debe tener al menos 6 caracteres.', 'edad.integer' => 'La edad debe ser un número entero.', 'edad.min' => 'La edad no puede ser negativa.', 'ficha.exists' => 'La ficha no existe.', 'rol.exists' => 'El rol no existe.'];
    }
}
