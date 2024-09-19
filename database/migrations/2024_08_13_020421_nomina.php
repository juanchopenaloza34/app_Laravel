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
        Schema::create('nomina', function (Blueprint $table) {
            $table->string('codNomina')->primary(); // Define codNomina como clave primaria
            $table->string('documento'); // Clave foránea referenciando la tabla empleado
            $table->string('codDeduccion'); // Clave foránea referenciando la tabla deducciones
            $table->string('codDevengados'); // Clave foránea referenciando la tabla devengados
            $table->decimal('total', 10, 2); // Total de la nómina, definido como decimal (total, decimales)
            $table->string('periodo'); // Período de la nómina
            $table->timestamps(); // Agrega created_at y updated_at

            // Definir claves foráneas
            $table->foreign('documento')->references('documento')->on('empleado')->onDelete('cascade');
            $table->foreign('codDeduccion')->references('codDeduccion')->on('deducciones')->onDelete('cascade');
            $table->foreign('codDevengados')->references('codDevengados')->on('devengados')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nomina');
    }
};
