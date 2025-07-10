<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMaterialRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return ['nombrematerial' => 'sometimes|string', 'descripcion' => 'sometimes|string', 'stock' => 'sometimes|integer', 'caduca' => 'sometimes|boolean', 'fecha_vencimiento' => 'sometimes|date|nullable', 'activo' => 'sometimes|boolean|nullable', 'categoriamaterial' => 'sometimes|exists:categorias_materiales,idcategoria_material', 'tipomaterial' => 'sometimes|exists:tipos_materiales,idtipo_material', 'unidadmedida' => 'sometimes|exists:unidadmedidas,idunidadmedida'];
    }
    public function messages()
    {
        return ['nombrematerial.string' => 'El nombre debe ser texto.', 'descripcion.string' => 'La descripción debe ser texto.', 'stock.integer' => 'El stock debe ser un entero.', 'caduca.boolean' => 'Caduca debe ser verdadero o falso.', 'fecha_vencimiento.date' => 'La fecha debe ser válida.', 'activo.boolean' => 'Debe ser verdadero o falso.', 'categoriamaterial.exists' => 'La categoría no existe.', 'tipomaterial.exists' => 'El tipo no existe.', 'unidadmedida.exists' => 'La unidad no existe.'];
    }
}
