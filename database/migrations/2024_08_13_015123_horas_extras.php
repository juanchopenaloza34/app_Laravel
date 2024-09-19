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
        Schema::create('horas_extras', function (Blueprint $table) {
            $table->string('codHorasExtras')->primary(); // Define codHorasExtras como clave primaria
            $table->string('documento'); // Clave foránea referenciando la tabla empleado
            $table->string('descripcionHE'); // Descripción de las horas extras
            $table->decimal('total', 10, 2); // Total de horas extras, definido como decimal (total, decimales)
            $table->timestamps(); // Agrega created_at y updated_at

            // Definir la clave foránea
            $table->foreign('documento')->references('documento')->on('empleado')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horas_extras');
    }
};
