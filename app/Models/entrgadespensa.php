<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class entrgadespensa extends Model
{
    use HasFactory;

    protected $fillable=[
        'id_registro',
        'fecha',
        'cantidad',
        'responsable',
    ];

    public function registros(){
        return $this->belongsTo(registro::class,'id_registro');
        
    }
}
