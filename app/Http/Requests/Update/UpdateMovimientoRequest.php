<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMovimientoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return ['activo' => 'sometimes|boolean|nullable', 'movimientopersona' => 'sometimes|exists:personas,idpersona', 'tipomovimiento' => 'sometimes|exists:tipomovimientos,idtipomovimiento'];
    }
    public function messages()
    {
        return ['activo.boolean' => 'Debe ser verdadero o falso.', 'movimientopersona.exists' => 'La persona no existe.', 'tipomovimiento.exists' => 'El tipo de movimiento no existe.'];
    }
}
