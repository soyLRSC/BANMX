<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class entradasalidaguardia extends Model
{
    use HasFactory;
     protected $fillable=[
        'id_guardia',
        'hora_entrada',
        'hora_salida',
        'fecha',
    ];

    public function guardia()
    {
        return $this->belongsTo(guardia::class, 'id_guardia');
    }
}
