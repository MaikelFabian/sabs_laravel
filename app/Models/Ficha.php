<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ficha extends Model
{
    protected $table = 'fichas';
    protected $primaryKey = 'idficha';
    public $timestamps = true;
    protected $fillable = ['numficha', 'cantidadaprendices', 'activo', 'fechacreacion', 'fechaactualización'];

    protected $casts = [
        'activo' => 'boolean',
        'fechacreacion' => 'datetime',
        'fechaactualización' => 'datetime',
        'cantidadaprendices' => 'integer',
    ];

    public function personas(): HasMany
    {
        return $this->hasMany(Persona::class, 'ficha_id');
    }

    public function titulados(): HasMany
    {
        return $this->hasMany(Titulado::class, 'ficha_id');
    }
}
