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
        Schema::create('cargo', function (Blueprint $table) {
            $table->id('idCargo'); // Define idCargo como clave primaria auto-incrementable
            $table->unsignedBigInteger('idDepartamento'); // Clave foránea referenciando la tabla departamento
            $table->string('codNivelRiesgo'); // Clave foránea referenciando la tabla nivel_riesgo
            $table->string('descripcionCargo'); // Descripción del cargo
            $table->timestamps(); // Agrega created_at y updated_at

            // Definir claves foráneas
            $table->foreign('idDepartamento')->references('idDepartamento')->on('departamento')->onDelete('cascade');
            $table->foreign('codNivelRiesgo')->references('codNivelRiesgo')->on('nivel_riesgo')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cargo');
    }
};
