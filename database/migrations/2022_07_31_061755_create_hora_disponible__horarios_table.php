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
        Schema::create('hora_disponible__horarios', function (Blueprint $table) {
            $table->id('idHoraDisponible__Horario');
            $table->unsignedBigInteger('idHoraDisponible');
            $table->foreign('idHoraDisponible')->references('idHoraDisponible')->on('horas__disponibles')->onDelete('cascade');
            $table->unsignedBigInteger('idHorario');
            $table->foreign('idHorario')->references('idHorario')->on('horarios')->onDelete('cascade');
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
        Schema::dropIfExists('hora__disponible___horarios');
    }
};
