<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TipoMaterial extends Model
{
    protected $table = 'tipos_materiales';
    protected $primaryKey = 'idtipo_material';
    public $timestamps = true;
    protected $fillable = ['tipo', 'activo', 'fecha_creacion', 'fecha_actualizacion'];

    protected $casts = [
        'activo' => 'boolean',
        'fecha_creacion' => 'datetime',
        'fecha_actualizacion' => 'datetime',
    ];

    public function materiales(): HasMany
    {
        return $this->hasMany(Material::class, 'tipomaterial', 'idtipo_material');
    }
}