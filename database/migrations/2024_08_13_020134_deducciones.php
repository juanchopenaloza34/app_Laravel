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
        Schema::create('deducciones', function (Blueprint $table) {
            $table->string('codDeduccion')->primary(); // Define codDeduccion como clave primaria
            $table->string('documento'); // Clave foránea referenciando la tabla empleado
            $table->string('codNovedadDeduccion'); // Clave foránea referenciando la tabla novedad_deducciones
            $table->decimal('total', 10, 2); // Total de la deducción, definido como decimal (total, decimales)
            $table->string('periodo'); // Período de la deducción
            $table->decimal('salud', 10, 2)->nullable(); // Monto de deducción para salud
            $table->decimal('pension', 10, 2)->nullable(); // Monto de deducción para pensión
            $table->timestamps(); // Agrega created_at y updated_at

            // Definir claves foráneas
            $table->foreign('documento')->references('documento')->on('empleado')->onDelete('cascade');
            $table->foreign('codNovedadDeduccion')->references('codNovedadDeduccion')->on('novedad_deducciones')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deducciones');
    }
};
