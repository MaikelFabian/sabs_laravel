<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMunicipioRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return ['municipio' => 'sometimes|string', 'activo' => 'sometimes|boolean|nullable'];
    }
    public function messages()
    {
        return ['municipio.string' => 'El nombre debe ser texto.', 'activo.boolean' => 'Debe ser verdadero o falso.'];
    }
}
