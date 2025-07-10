<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoriaMaterial extends Model
{
    protected $table = 'categorias_materiales';
    protected $primaryKey = 'idcategoria_material';
    public $timestamps = true;
    protected $fillable = ['codigo_material', 'categoria', 'activo', 'fecha_creacion', 'fecha_actualizacion'];

    protected $casts = [
        'activo' => 'boolean',
        'fecha_creacion' => 'datetime',
        'fecha_actualizacion' => 'datetime',
    ];

    public function materiales(): HasMany
    {
        return $this->hasMany(Material::class, 'categoriamaterial', 'idcategoria_material');
    }
}
