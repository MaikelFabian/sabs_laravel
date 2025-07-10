<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Permiso extends Model
{
    protected $table = 'permisos';
    protected $primaryKey = 'idpermiso';
    public $timestamps = true;
    protected $fillable = ['nombre', 'descripcion', 'codigo', 'activo', 'fechacreacion', 'fechaactualización'];

    protected $casts = [
        'activo' => 'boolean',
        'fechacreacion' => 'datetime',
        'fechaactualización' => 'datetime',
    ];

    public function rolPermisoOpciones(): HasMany
    {
        return $this->hasMany(RolPermisoOpcion::class, 'permiso_id');
    }
}
