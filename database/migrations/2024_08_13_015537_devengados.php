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
        Schema::create('devengados', function (Blueprint $table) {
            $table->string('codDevengados')->primary(); // Define codDevengados como clave primaria
            $table->string('documento'); // Clave foránea referenciando la tabla empleado
            $table->string('codHorasExtras'); // Clave foránea referenciando la tabla horas_extras
            $table->decimal('totalDevengado', 10, 2); // Total devengado, definido como decimal (total, decimales)
            $table->string('periodo'); // Período del devengado
            $table->timestamps(); // Agrega created_at y updated_at

            // Definir claves foráneas
            $table->foreign('documento')->references('documento')->on('empleado')->onDelete('cascade');
            $table->foreign('codHorasExtras')->references('codHorasExtras')->on('horas_extras')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devengados');
    }
};
