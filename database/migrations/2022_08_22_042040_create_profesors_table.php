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
        Schema::create('profesors', function (Blueprint $table) {
            $table->id('idProfesor');

            $table->unsignedBigInteger('idEmpleado');
            $table->foreign('idEmpleado')->references('idEmpleado')->on('empleados')->onDelete('cascade');
            $table->unsignedBigInteger('idPisina');
            $table->foreign('idPisina')->references('idPisina')->on('pisinas')->onDelete('cascade');

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
        Schema::dropIfExists('profesors');
    }
};
