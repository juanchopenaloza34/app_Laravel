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
        Schema::create('tipo_contrato', function (Blueprint $table) {
            $table->string('codTipoContrato')->primary(); // Define codTipoContrato como clave primaria
            $table->string('DescripcionTipoContrato'); // Descripción del tipo de contrato
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
        Schema::dropIfExists('tipo_contrato');
    }
};