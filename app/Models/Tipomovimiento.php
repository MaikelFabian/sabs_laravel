<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tipomovimiento extends Model
{
    protected $table = 'tipomovimientos';
    protected $primaryKey = 'idtipomovimiento';
    public $timestamps = true;
    protected $fillable = ['tipomovimiento', 'activo', 'fecha_creacion', 'fecha_actualizacion'];

    protected $casts = [
        'activo' => 'boolean',
        'fecha_creacion' => 'datetime',
        'fecha_actualizacion' => 'datetime',
    ];

    public function movimientos(): HasMany
    {
        return $this->hasMany(Movimiento::class, 'tipomovimiento', 'idtipomovimiento');
    }
}