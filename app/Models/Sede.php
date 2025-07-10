<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sede extends Model
{
    protected $table = 'sedes';
    protected $primaryKey = 'idsede';
    public $timestamps = true;
    protected $fillable = ['sede', 'direccion', 'activo', 'fecha_creacion', 'fecha_actualizacion', 'centro'];

    protected $casts = [
        'activo' => 'boolean',
        'fecha_creacion' => 'datetime',
        'fecha_actualizacion' => 'datetime',
    ];

    public function centro(): BelongsTo
    {
        return $this->belongsTo(Centro::class, 'centro', 'idcentro');
    }
}
