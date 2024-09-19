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
        Schema::create('estado_usuario', function (Blueprint $table) {
            $table->id('idEstado'); // Define idEstado como clave primaria auto-incrementable
            $table->string('descripcionUsuario'); // Descripción del estado del usuario
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
        Schema::dropIfExists('estado_usuario');
    }
};
