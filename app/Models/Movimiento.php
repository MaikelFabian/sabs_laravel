<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Movimiento extends Model
{
    protected $table = 'movimientos';
    protected $primaryKey = 'idmovimiento';
    public $timestamps = true;
    protected $fillable = ['activo', 'fecha_creacion', 'fecha_actualizacion', 'movimientopersona', 'tipomovimiento'];

    protected $casts = [
        'activo' => 'boolean',
        'fecha_creacion' => 'datetime',
        'fecha_actualizacion' => 'datetime',
    ];

    public function persona(): BelongsTo
    {
        return $this->belongsTo(Persona::class, 'movimientopersona', 'idpersona');
    }

    public function tipomovimiento(): BelongsTo
    {
        return $this->belongsTo(Tipomovimiento::class, 'tipomovimiento', 'idtipomovimiento');
    }
}
