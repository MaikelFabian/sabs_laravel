<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSitioRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return ['sitio' => 'sometimes|string', 'activo' => 'sometimes|boolean|nullable', 'tipositio' => 'sometimes|exists:tipositios,idtipositio'];
    }
    public function messages()
    {
        return ['sitio.string' => 'El nombre debe ser texto.', 'activo.boolean' => 'Debe ser verdadero o falso.', 'tipositio.exists' => 'El tipo de sitio no existe.'];
    }
}
