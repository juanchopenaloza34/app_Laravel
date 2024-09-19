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
        Schema::create('nivel_riesgo', function (Blueprint $table) {
            $table->string('codNivelRiesgo')->primary(); // Define codNivelRiesgo como clave primaria
            $table->string('descripcion'); // Descripción del nivel de riesgo
            $table->timestamps(); // Agrega created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nivel_riesgo');
    }
};