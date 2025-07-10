<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Titulado extends Model
{
    protected $table = 'titulados';
    protected $primaryKey = 'idtitulado';
    public $timestamps = true;
    protected $fillable = ['titulado', 'activo', 'fechacreacion', 'fechaactualización', 'area', 'ficha'];

    protected $casts = [
        'activo' => 'boolean',
        'fechacreacion' => 'datetime',
        'fechaactualización' => 'datetime',
    ];

    public function area(): BelongsTo
    {
        return $this->belongsTo(Area::class, 'area', 'idarea');
    }

    public function ficha(): BelongsTo
    {
        return $this->belongsTo(Ficha::class, 'ficha', 'idficha');
    }
}
