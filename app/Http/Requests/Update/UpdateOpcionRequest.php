<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOpcionRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return ['nombre_opcion' => 'sometimes|string|max:100', 'descripcion' => 'sometimes|string|nullable', 'ruta_frontend' => 'sometimes|string|max:150', 'id_modulo' => 'sometimes|exists:modulos,id'];
    }
    public function messages()
    {
        return ['nombre_opcion.string' => 'El nombre debe ser texto.', 'nombre_opcion.max' => 'Máximo 100 caracteres.', 'descripcion.string' => 'La descripción debe ser texto.', 'ruta_frontend.string' => 'La ruta debe ser texto.', 'ruta_frontend.max' => 'Máximo 150 caracteres.', 'id_modulo.exists' => 'El módulo no existe.'];
    }
}