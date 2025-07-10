<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTipomovimientoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return ['tipomovimiento' => 'sometimes|string', 'activo' => 'sometimes|boolean|nullable'];
    }
    public function messages()
    {
        return ['tipomovimiento.string' => 'El tipo de movimiento debe ser texto.', 'activo.boolean' => 'Debe ser verdadero o falso.'];
    }
}
