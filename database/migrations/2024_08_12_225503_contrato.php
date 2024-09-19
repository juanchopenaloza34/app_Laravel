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
        Schema::create('contrato', function (Blueprint $table) {
            $table->id('idContrato'); // Define idContrato como clave primaria auto-incrementable
            $table->unsignedBigInteger('idCargo'); // Clave foránea referenciando la tabla cargo
            $table->string('codTipoContrato'); // Clave foránea referenciando la tabla tipo_contrato
            $table->decimal('salario', 10, 2); // Salario del contrato (con 2 decimales)
            $table->date('fechaInicio'); // Fecha de inicio del contrato
            $table->date('fechaFin')->nullable(); // Fecha de fin del contrato (puede ser nula si el contrato no tiene fecha de fin)
            $table->string('jornadaLaboral'); // Jornada laboral del contrato
            $table->timestamps(); // Agrega created_at y updated_at

            // Definir claves foráneas
            $table->foreign('idCargo')->references('idCargo')->on('cargo')->onDelete('cascade');
            $table->foreign('codTipoContrato')->references('codTipoContrato')->on('tipo_contrato')->onDelete('cascade');
        });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contrato');
    }
};
