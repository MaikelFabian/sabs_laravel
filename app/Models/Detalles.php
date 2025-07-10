<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Detalles extends Model
{
    protected $table = 'detalles';
    protected $primaryKey = 'iddetalle';
    public $timestamps = true;
    protected $fillable = ['cantidasolicitada', 'descripcion', 'activo', 'fecha_creacion', 'fecha_actualizacion', 'material', 'personaaprueba', 'personaencargada', 'personasolicita'];

    protected $casts = [
        'activo' => 'boolean',
        'fecha_creacion' => 'datetime',
        'fecha_actualizacion' => 'datetime',
        'cantidasolicitada' => 'integer',
    ];

    public function material(): BelongsTo
    {
        return $this->belongsTo(Material::class, 'material', 'idmaterial');
    }

    public function personaAprobadora(): BelongsTo
    {
        return $this->belongsTo(Persona::class, 'personaaprueba', 'idpersona');
    }

    public function personaEncargada(): BelongsTo
    {
        return $this->belongsTo(Persona::class, 'personaencargada', 'idpersona');
    }

    public function personaSolicitante(): BelongsTo
    {
        return $this->belongsTo(Persona::class, 'personasolicita', 'idpersona');
    }
}