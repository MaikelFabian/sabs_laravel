<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Material extends Model
{
    protected $table = 'materiales';
    protected $primaryKey = 'idmaterial';
    public $timestamps = true;
    protected $fillable = ['nombrematerial', 'descripcion', 'stock', 'caduca', 'fecha_vencimiento', 'activo', 'fecha_creacion', 'fecha_actualizacion', 'categoriamaterial', 'tipomaterial', 'unidadmedida'];

    protected $casts = [
        'caduca' => 'boolean',
        'activo' => 'boolean',
        'fecha_vencimiento' => 'datetime',
        'fecha_creacion' => 'datetime',
        'fecha_actualizacion' => 'datetime',
        'stock' => 'integer',
    ];

    public function detalles(): HasMany
    {
        return $this->hasMany(Detalles::class, 'material_id');
    }

    public function categoriamaterial(): BelongsTo
    {
        return $this->belongsTo(CategoriaMaterial::class, 'categoriamaterial', 'idcategoria_material');
    }

    public function tipomaterial(): BelongsTo
    {
        return $this->belongsTo(TipoMaterial::class, 'tipomaterial', 'idtipo_material');
    }

    public function unidadmedida(): BelongsTo
    {
        return $this->belongsTo(Unidadmedida::class, 'unidadmedida', 'idunidadmedida');
    }
}
