<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Unidadmedida extends Model
{
    protected $table = 'unidadmedidas';
    protected $primaryKey = 'idunidadmedida';
    public $timestamps = true;
    protected $fillable = ['unidadmedida', 'activo', 'fechacreacion', 'fechaactualización'];

    protected $casts = [
        'activo' => 'boolean',
        'fechacreacion' => 'datetime',
        'fechaactualización' => 'datetime',
    ];

    public function materials(): HasMany
    {
        return $this->hasMany(Material::class, 'unidadmedida_id');
    }
}
