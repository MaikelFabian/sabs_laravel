<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAreaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return ['area' => 'sometimes|string', 'activo' => 'sometimes|boolean|nullable'];
    }
    public function messages()
    {
        return ['area.string' => 'El nombre debe ser texto.', 'activo.boolean' => 'Debe ser verdadero o falso.'];
    }
}
