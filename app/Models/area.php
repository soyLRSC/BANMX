<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class area extends Model
{
    use HasFactory;

    protected $fillable =[
        'nombre',
        'cantidad_minima',
        'cantidad_maxima',
        'encargado',
        'gerente',
    ];


    public function registro(){
        return $this->hasMany(registro::class, 'principal');
    }
    public function alternativa_uno(){
        return $this->hasMany(registro::class, 'alternativa_uno');
    }
    public function alternativa_dos(){
        return $this->hasMany(registro::class, 'alternativa_dos');
    }
    
     public function id_area_salida(){
        return $this->hasMany(movimiento::class,'id_area_salida');
    }
     public function id_area_entrada(){
        return $this->hasMany(movimiento::class,'id_area_entrada');
    }
}
