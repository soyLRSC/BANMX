<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class registro extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido_p',
        'apellido_m',
        'genero',
        'nac',
        'ine',
        'domicilio',
        'calle',
        'colonia',
        'municipio',
        'codigop',
        'certificadom',
        'acuerdo',
        'autorizacion',
        'reglamento',
        'contactoemergencia',
        'telefonoemergencia',
        'fechaingreso',
        'principal',
        'alternativa_uno',
        'alternativa_dos',
        'especiales',
        'foto',
    ];

   public function areaPrincipal()
{
    return $this->belongsTo(area::class, 'principal');
}

public function areaAlternativaUno()
{
    return $this->belongsTo(area::class, 'alternativa_uno');
}

public function areaAlternativaDos()
{
    return $this->belongsTo(area::class, 'alternativa_dos');
}

public function ingresoSalidas()
{
    return $this->hasMany(ingreso_salida::class, 'id_registro');
}
public function permitidas()
{
    return $this->hasMany(permitida::class, 'id_registro');
}
public function anticipadas()
{
    return $this->hasMany(anticipada::class, 'id_registro');
}
public function extras()
{
    return $this->hasMany(extra::class, 'id_registro');
}

public function incidentes(){
    return $this->hasMany(incidente::class,'id_registro');
}
public function bajas(){
    return $this->hasMany(baja::class,'id_registro');
}
public function reingresos(){
    return $this->hasMany(reingreso::class,'id_registro');
}

public function norecibios(){
    return $this->hasMany(norecibio::class,'id_registro');
}
public function entrgadespensas(){
    return $this->hasMany(entrgadespensa::class,'id_registro');
}

}
