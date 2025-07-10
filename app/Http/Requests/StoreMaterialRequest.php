<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMaterialRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nombrematerial' => 'required|string',
            'descripcion' => 'required|string',
            'stock' => 'required|integer',
            'caduca' => 'required|boolean',
            'fecha_vencimiento' => 'nullable|date',
            'activo' => 'boolean|nullable',
            'categoriamaterial' => 'required|exists:categorias_materiales,idcategoria_material',
            'tipomaterial' => 'required|exists:tipos_materiales,idtipo_material',
            'unidadmedida' => 'required|exists:unidadmedidas,idunidadmedida',
        ];
    }

    public function messages()
    {
        return [
            'nombrematerial.required' => 'El nombre del material es obligatorio.',
            'nombrematerial.string' => 'El nombre debe ser texto.',
            'descripcion.required' => 'La descripción es obligatoria.',
            'descripcion.string' => 'La descripción debe ser texto.',
            'stock.required' => 'El stock es obligatorio.',
            'stock.integer' => 'El stock debe ser un entero.',
            'caduca.required' => 'El campo caduca es obligatorio.',
            'caduca.boolean' => 'Caduca debe ser verdadero o falso.',
            'fecha_vencimiento.date' => 'La fecha de vencimiento debe ser válida.',
            'activo.boolean' => 'El estado activo debe ser verdadero o falso.',
            'categoriamaterial.required' => 'La categoría es obligatoria.',
            'categoriamaterial.exists' => 'La categoría no existe.',
            'tipomaterial.required' => 'El tipo de material es obligatorio.',
            'tipomaterial.exists' => 'El tipo de material no existe.',
            'unidadmedida.required' => 'La unidad de medida es obligatoria.',
            'unidadmedida.exists' => 'La unidad de medida no existe.',
        ];
    }
}
