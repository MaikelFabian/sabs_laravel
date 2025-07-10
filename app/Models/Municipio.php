<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Municipio extends Model
{
    protected $table = 'municipios';
    protected $primaryKey = 'idmunicipio';
    public $timestamps = true;
    protected $fillable = ['municipio', 'activo', 'fechacreacion', 'fechaactualización'];

    protected $casts = [
        'activo' => 'boolean',
        'fechacreacion' => 'datetime',
        'fechaactualización' => 'datetime',
    ];

    public function centros(): HasMany
    {
        return $this->hasMany(Centro::class, 'municipio_id');
    }
}
