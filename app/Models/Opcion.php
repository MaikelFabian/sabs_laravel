<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Opcion extends Model
{
    protected $table = 'opciones';
    protected $fillable = ['nombre_opcion', 'descripcion', 'ruta_frontend', 'id_modulo'];

    public function permisos(): HasMany
    {
        return $this->hasMany(Permiso::class, 'opcion_id');
    }

    public function rolPermisoOpciones(): HasMany
    {
        return $this->hasMany(RolPermisoOpcion::class, 'opcion_id');
    }
}