<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
           'correo' => 'required|email|unique:personas,correo',
            'contrasena' => 'required|string|min:6',
        ];
    }
    
    public function messages(): array
    {
        return [
            'correo.required'    => 'El email es obligatorio',
            'contrasena.email'       => 'El email debe tener un formato válido',

            
            'contrasena.required' => 'La contraseña es obligatoria',
            'contrasena.min'      => 'La contraseña debe tener al menos 6 caracteres'
        ];
}
}