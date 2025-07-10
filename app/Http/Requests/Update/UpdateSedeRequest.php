<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSedeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return ['sede' => 'sometimes|string', 'direccion' => 'sometimes|string', 'activo' => 'sometimes|boolean|nullable', 'centro' => 'sometimes|exists:centros,idcentro'];
    }
    public function messages()
    {
        return ['sede.string' => 'El nombre de la sede debe ser texto.', 'direccion.string' => 'La dirección debe ser texto.', 'activo.boolean' => 'Debe ser verdadero o falso.', 'centro.exists' => 'El centro no existe.'];
    }
}
