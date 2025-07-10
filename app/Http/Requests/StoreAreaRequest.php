<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAreaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'area' => 'required|string',
            'activo' => 'boolean|nullable',
        ];
    }

    public function messages()
    {
        return [
            'area.required' => 'El nombre del área es obligatorio.',
            'area.string' => 'El nombre debe ser texto.',
            'activo.boolean' => 'El estado activo debe ser verdadero o falso.',
        ];
    }
}