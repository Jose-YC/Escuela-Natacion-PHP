<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle__matriculas', function (Blueprint $table) {
            $table->id('idDetalleMatricula');
            $table->unsignedBigInteger('idInscripcion');
            $table->foreign('idInscripcion')->references('idInscripcion')->on('inscripcions')->onDelete('cascade');
            $table->unsignedBigInteger('idProfesor');
            $table->foreign('idProfesor')->references('idProfesor')->on('profesors')->onDelete('cascade');

            $table->unsignedBigInteger('idHoraDisponible__Horario');
            $table->foreign('idHoraDisponible__Horario')->references('idHoraDisponible__Horario')->on('hora_disponible__horarios')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle__matriculas');
    }
};
