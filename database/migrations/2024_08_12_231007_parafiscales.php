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
        Schema::create('parafiscales', function (Blueprint $table) {
            $table->string('nit'); // Define nit como clave foránea
            $table->decimal('salud', 5, 2); // Porcentaje o valor para salud
            $table->decimal('pension', 5, 2); // Porcentaje o valor para pensión
            $table->decimal('arl', 5, 2); // Porcentaje o valor para ARL
            $table->decimal('icbf', 5, 2); // Porcentaje o valor para ICBF
            $table->decimal('cajaCompensacion', 5, 2); // Porcentaje o valor para caja de compensación
            $table->timestamps(); // Agrega created_at y updated_at

            // Definir la clave foránea
            $table->foreign('nit')->references('nit')->on('empresa')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parafiscales');
    }
};
