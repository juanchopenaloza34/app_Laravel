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
        Schema::create('empresa', function (Blueprint $table) {
            $table->string('nit')->primary(); // Define nit como clave primaria
            $table->string('tipoContribuyente'); // Tipo de contribuyente
            $table->string('digitoVerificacion'); // Dígito de verificación
            $table->string('nombre'); // Nombre de la empresa
            $table->string('telefono')->nullable(); // Teléfono de la empresa (puede ser nulo)
            $table->string('email')->unique(); // Email de la empresa, único
            $table->string('direccion'); // Dirección de la empresa
            $table->binary('logo')->nullable(); // Logo de la empresa (puede ser nulo)
            $table->string('rut')->unique(); // RUT de la empresa (puede ser nulo)
            $table->string('camaraComercio'); // Cámara de comercio (puede ser nulo)
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
        Schema::dropIfExists('empresa');
    }
};
