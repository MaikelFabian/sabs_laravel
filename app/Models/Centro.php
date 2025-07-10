<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Centro extends Model
{
    protected $table = 'centros';
    protected $primaryKey = 'idcentro';
    public $timestamps = true;
    protected $fillable = ['centro', 'activo', 'fechacreacion', 'fechaactualización', 'municipio'];

    protected $casts = [
        'activo' => 'boolean',
        'fechacreacion' => 'datetime',
        'fechaactualización' => 'datetime',
    ];

    public function areacentros(): HasMany
    {
        return $this->hasMany(Areacentro::class, 'centro_id');
    }

    public function municipio(): BelongsTo
    {
        return $this->belongsTo(Municipio::class, 'municipio', 'idmunicipio');
    }

    public function sedes(): HasMany
    {
        return $this->hasMany(Sede::class, 'centro_id');
    }
}