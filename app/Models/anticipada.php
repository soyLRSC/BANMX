<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anticipada extends Model
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
