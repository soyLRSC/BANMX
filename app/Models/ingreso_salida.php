<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class ingreso_salida extends Model
{
    use HasFactory;
    protected $fillable=[
        'id_registro',
        'hora_entrada',
        'hora_salida',
        'fecha',
    ];

    public function registro()
    {
        return $this->belongsTo(registro::class, 'id_registro');
    }
}
