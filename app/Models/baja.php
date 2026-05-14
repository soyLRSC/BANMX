<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class baja extends Model
{
    use HasFactory;

       protected $fillable=[
        'id_registro',
        'concepto',
    ];

    public function registros(){
        return $this->belongsTo(\App\Models\registro::class,'id_registro');
    }
}
