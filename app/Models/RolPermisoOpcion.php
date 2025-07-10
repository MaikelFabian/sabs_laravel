<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RolPermisoOpcion extends Model
{
    protected $table = 'rol_permiso_opcion';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['id_rol', 'id_permiso', 'id_opcion', 'activo', 'fecha_creacion', 'fecha_actualizacion'];

    protected $casts = [
        'activo' => 'boolean',
        'fecha_creacion' => 'datetime',
        'fecha_actualizacion' => 'datetime',
    ];

    public function rol(): BelongsTo
    {
        return $this->belongsTo(Rol::class, 'id_rol', 'idrol');
    }

    public function permiso(): BelongsTo
    {
        return $this->belongsTo(Permiso::class, 'id_permiso', 'idpermiso');
    }

    public function opcion(): BelongsTo
    {
        return $this->belongsTo(Opcion::class, 'id_opcion', 'idopcion');
    }
}