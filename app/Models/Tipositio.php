<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tipositio extends Model
{
    protected $table = 'tipositios';
    protected $primaryKey = 'idtipositio';
    public $timestamps = true;
    protected $fillable = ['tipositio', 'activo', 'fechacreacion', 'fechaactualización'];

    protected $casts = [
        'activo' => 'boolean',
        'fechacreacion' => 'datetime',
        'fechaactualización' => 'datetime',
    ];

    public function sitios(): HasMany
    {
        return $this->hasMany(Sitio::class, 'tipositio_id');
    }
}
