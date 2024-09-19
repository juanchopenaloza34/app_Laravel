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
        Schema::create('rol', function (Blueprint $table) {
            $table->string('codRol')->primary(); // Define codRol como clave primaria
            $table->string('documento'); // Clave foránea referenciando la tabla empleado
            $table->string('descripcionRol'); // Descripción del rol
            $table->timestamps(); // Agrega created_at y updated_at

            // Definir claves foráneas
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
        Schema::dropIfExists('rol');
    }
};
