<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDetallesRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return ['cantidasolicitada' => 'sometimes|integer|min:1', 'descripcion' => 'sometimes|string|nullable', 'activo' => 'sometimes|boolean|nullable', 'material' => 'sometimes|exists:materiales,idmaterial', 'personaaprueba' => 'sometimes|exists:personas,idpersona', 'personaencargada' => 'sometimes|exists:personas,idpersona', 'personasolicita' => 'sometimes|exists:personas,idpersona'];
    }
    public function messages()
    {
        return ['cantidasolicitada.integer' => 'La cantidad debe ser un número entero.', 'cantidasolicitada.min' => 'La cantidad debe ser al menos 1.', 'descripcion.string' => 'La descripción debe ser texto.', 'activo.boolean' => 'Debe ser verdadero o falso.', 'material.exists' => 'El material no existe.', 'personaaprueba.exists' => 'La persona que aprueba no existe.', 'personaencargada.exists' => 'La persona encargada no existe.', 'personasolicita.exists' => 'La persona que solicita no existe.'];
    }
}
