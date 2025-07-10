<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Area extends Model
{
    protected $table = 'areas';
    protected $primaryKey = 'idarea';
    public $timestamps = true;
    protected $fillable = ['area', 'activo', 'fechacreacion', 'fechaactualización'];

    protected $casts = [
        'activo' => 'boolean',
        'fechacreacion' => 'datetime',
        'fechaactualización' => 'datetime',
    ];

    public function areacentros(): HasMany
    {
        return $this->hasMany(Areacentro::class, 'area_id');
    }

    public function titulados(): HasMany
    {
        return $this->hasMany(Titulado::class, 'area_id');
    }
}