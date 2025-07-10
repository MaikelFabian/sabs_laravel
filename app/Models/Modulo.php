<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Modulo extends Model
{
    protected $table = 'modulos';
    protected $fillable = ['nombre_modulo'];

    public function opciones(): HasMany
    {
        return $this->hasMany(Opcion::class, 'id_modulo');
    }
}
// 