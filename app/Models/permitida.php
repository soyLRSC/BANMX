<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class permitida extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_registro',
        'hora',
        'fecha',
        'motivo',
        'encargado'
    ];

   public function registro()
{
    return $this->belongsTo(registro::class, 'id_registro');
}
}
