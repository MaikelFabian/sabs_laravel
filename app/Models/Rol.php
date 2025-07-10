<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Rol extends Model
{
    protected $table = 'roles';
    protected $primaryKey = 'idrol';
    public $timestamps = true;
    protected $fillable = ['nombrerol', 'activo', 'fecha_creacion', 'fecha_actualizacion', 'permiso'];

    protected $casts = [
        'activo' => 'boolean',
        'fecha_creacion' => 'datetime',
        'fecha_actualizacion' => 'datetime',
    ];

    public function personas(): HasMany
    {
        return $this->hasMany(Persona::class, 'rol', 'idrol');
    }

    public function permiso(): BelongsTo
    {
        return $this->belongsTo(Permiso::class, 'permiso', 'idpermiso');
    }

    public function rolPermisoOpciones(): HasMany
    {
        return $this->hasMany(RolPermisoOpcion::class, 'id_rol', 'idrol');
    }
}