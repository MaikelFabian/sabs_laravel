<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAreacentroRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'activo' => 'sometimes|boolean|nullable',
            'area' => 'sometimes|exists:areas,idarea',
            'centro' => 'sometimes|exists:centros,idcentro'
        ];
    }
    public function messages()
    {
        return [
            'activo.boolean' => 'Debe ser verdadero o falso.',
            'area.exists' => 'El área no existe.',
            'centro.exists' => 'El centro no existe.'
        ];
    }
}
