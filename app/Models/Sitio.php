<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sitio extends Model
{
    protected $table = 'sitios';
    protected $primaryKey = 'idsitio';
    public $timestamps = true;
    protected $fillable = ['sitio', 'activo', 'fechacreacion', 'fechaactualización', 'tipositio'];

    protected $casts = [
        'activo' => 'boolean',
        'fechacreacion' => 'datetime',
        'fechaactualización' => 'datetime',
    ];

    public function tipositio(): BelongsTo
    {
        return $this->belongsTo(Tipositio::class, 'tipositio', 'idtipositio');
    }
}