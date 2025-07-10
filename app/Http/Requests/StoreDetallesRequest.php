<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDetallesRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'cantidasolicitada' => 'required|integer|min:1',
            'descripcion' => 'nullable|string',
            'activo' => 'boolean|nullable',
            'material' => 'required|exists:materiales,idmaterial',
            'personaaprueba' => 'required|exists:personas,idpersona',
            'personaencargada' => 'required|exists:personas,idpersona',
            'personasolicita' => 'required|exists:personas,idpersona',
        ];
    }

    public function messages()
    {
        return [
            'cantidasolicitada.required' => 'La cantidad solicitada es obligatoria.',
            'cantidasolicitada.integer' => 'La cantidad debe ser un número entero.',
            'cantidasolicitada.min' => 'La cantidad debe ser al menos 1.',
            'descripcion.string' => 'La descripción debe ser texto.',
            'activo.boolean' => 'El estado activo debe ser verdadero o falso.',
            'material.required' => 'El material es obligatorio.',
            'material.exists' => 'El material seleccionado no existe.',
            'personaaprueba.required' => 'La persona que aprueba es obligatoria.',
            'personaaprueba.exists' => 'La persona que aprueba no existe.',
            'personaencargada.required' => 'La persona encargada es obligatoria.',
            'personaencargada.exists' => 'La persona encargada no existe.',
            'personasolicita.required' => 'La persona que solicita es obligatoria.',
            'personasolicita.exists' => 'La persona que solicita no existe.',
        ];
    }
}
