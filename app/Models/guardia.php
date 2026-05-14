<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guardia extends Model
{
    use HasFactory;

    protected $fillable=[
        'nombre',
        'apellido',
        'area'
    ] ;

public function guardia(){
    return $this->hasMany( entradasalidaguardia::class, 'id_guardia');
}




}
