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
        Schema::create('empleado', function (Blueprint $table) {
            $table->string('documento')->primary(); // Define documento como clave primaria
            $table->string('nit'); // Clave foránea referenciando la tabla empresa
            $table->unsignedBigInteger('idEstado'); // Clave foránea referenciando la tabla estado_empleado
            $table->unsignedBigInteger('idContrato'); // Clave foránea referenciando la tabla contrato
            $table->string('tipoDocumento'); // Tipo de documento
            $table->string('nombres'); // Nombres del empleado
            $table->string('apellidos'); // Apellidos del empleado
            $table->string('correo')->unique(); // Correo del empleado, único
            $table->string('telefono')->nullable(); // Teléfono del empleado (puede ser nulo)
            $table->string('direccion'); // Dirección del empleado
            $table->string('ciudad'); // Ciudad del empleado
            $table->string('departamento'); // Departamento del empleado
            $table->timestamps(); // Agrega created_at y updated_at

            // Definir claves foráneas
            $table->foreign('nit')->references('nit')->on('empresa')->onDelete('cascade');
            $table->foreign('idEstado')->references('idEstado')->on('estado_empleado')->onDelete('cascade');
            $table->foreign('idContrato')->references('idContrato')->on('contrato')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleado');
    }
};
