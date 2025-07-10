<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Persona extends Model
{
    protected $table = 'personas';
    protected $primaryKey = 'idpersona';
    public $timestamps = true;
    protected $fillable = ['identificacion', 'nombre', 'apellido', 'telefono', 'correo', 'contrasena', 'edad', 'activo', 'fecha_creacion', 'fecha_actualizacion', 'ficha', 'rol'];

    protected $casts = [
        'activo' => 'boolean',
        'fecha_creacion' => 'datetime',
        'fecha_actualizacion' => 'datetime',
        'edad' => 'integer',
    ];

    public function detallesAprobados(): HasMany
    {
        return $this->hasMany(Detalles::class, 'personaaprueba', 'idpersona');
    }

    public function detallesEncargados(): HasMany
    {
        return $this->hasMany(Detalles::class, 'personaencargada', 'idpersona');
    }

    public function detallesSolicitados(): HasMany
    {
        return $this->hasMany(Detalles::class, 'personasolicita', 'idpersona');
    }

    public function movimientos(): HasMany
    {
        return $this->hasMany(Movimiento::class, 'movimientopersona', 'idpersona');
    }

    public function ficha(): BelongsTo
    {
        return $this->belongsTo(Ficha::class, 'ficha', 'idficha');
    }

    public function rol(): BelongsTo
    {
        return $this->belongsTo(Rol::class, 'rol', 'idrol');
    }
}