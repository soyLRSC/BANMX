<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ingreso_salidas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_registro'); // Relación con el empleado registrado
             $table->foreign('id_registro')->references('id')->on('registros')->onDelete('cascade');
    
        $table->time('hora_entrada')->nullable();  // Hora exacta al llegar
        $table->time('hora_salida')->nullable();   // Hora exacta al salir
        $table->date('fecha');                     // Fecha del ingreso
        $table->timestamps();

       
         
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingreso_salidas');
    }
};
