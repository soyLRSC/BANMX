<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class extra extends Model
{
    use HasFactory;
    protected $fillable =[
        'id_registro',
        'entrada',
        'salida',
        'encargado',
        'motivo',
    ];

    public function registro(){
        return $this->belongsTo(registro::class,'id_registro');
    }
}
