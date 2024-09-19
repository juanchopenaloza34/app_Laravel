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
        Schema::create('usuario', function (Blueprint $table) {
            $table->id('idTipoUsuario'); // Define idTipoUsuario como clave primaria auto-incrementable
            $table->string('codRol'); // Clave foránea referenciando la tabla rol
            $table->unsignedBigInteger('idEstado'); // Clave foránea referenciando la tabla estado_usuario
            $table->timestamps(); // Agrega created_at y updated_at

            // Definir claves foráneas
            $table->foreign('codRol')->references('codRol')->on('rol')->onDelete('cascade');
            $table->foreign('idEstado')->references('idEstado')->on('estado_usuario')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
};
