<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Areacentro extends Model
{
    protected $table = 'areacentros';
    protected $primaryKey = 'idareacentro';
    public $timestamps = true;
    protected $fillable = ['activo', 'fechacreacion', 'fechaactualización', 'area', 'centro'];

    protected $casts = [
        'activo' => 'boolean',
        'fechacreacion' => 'datetime',
        'fechaactualización' => 'datetime',
    ];

    public function area(): BelongsTo
    {
        return $this->belongsTo(Area::class, 'area', 'idarea');
    }

    public function centro(): BelongsTo
    {
        return $this->belongsTo(Centro::class, 'centro', 'idcentro');
    }
}
