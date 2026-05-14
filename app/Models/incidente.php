<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class incidente extends Model
{
    use HasFactory;

    protected $fillable =[
        'id_registro',
        'motivo',
        'fecha',
        'hora',
        'encargado',

    ];

    public function registros(){
        return $this->belongsTo(registro::class,'id_registro');
    }
}
