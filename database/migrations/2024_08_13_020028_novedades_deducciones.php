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
        Schema::create('novedad_deducciones', function (Blueprint $table) {
            $table->string('codNovedadDeduccion')->primary(); // Define codNovedadDeduccion como clave primaria
            $table->string('descripcion'); // Descripción de la novedad o deducción
            $table->decimal('total', 10, 2); // Total de la novedad o deducción, definido como decimal (total, decimales)
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
        Schema::dropIfExists('novedad_deducciones');
    }
};
