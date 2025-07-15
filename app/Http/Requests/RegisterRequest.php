<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombre'      => 'required|string|max:255',
            'correo'     => 'required|string|email|unique:users,correo',
            'contraseña'  => 'required|string|min:6|confirmed',
            'rol'      => 'required|'
        ];
    }
    
    /**
     * Get custom error messages for validation rules.
     */
    public function messages(): array
    {
        return [
            'nombre.required'         =>      'El nombre es obligatorio',
            'nombre.max'              =>      'El nombre no puede tener más de 255 caracteres',
            
            
            'correo.required'        =>      'El correo es obligatorio',
            'correo.email'           =>      'El correo debe tener un formato válido',
            'correo.unique'          =>      'Este correo ya está registrado',

            
            'contrasena.required'     =>      'La contraseña es obligatoria',
            'contrasena.min'          =>      'La contraseña debe tener al menos 6 caracteres',
            'contrasena.confirmed'    =>      'La confirmación de contraseña no coincide',

            
            'rol.required'         =>      'El rol es obligatorio',
            'rol.in'               =>      'El rol debe ser admin o user',
    ];
}
}