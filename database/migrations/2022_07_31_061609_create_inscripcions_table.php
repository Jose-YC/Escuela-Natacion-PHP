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
        Schema::create('inscripcions', function (Blueprint $table) {
            $table->id('idInscripcion');
            //total,estado,monto
           
            $table->date('fecha');
            $table->integer('total');
            $table->unsignedBigInteger('idAlumno');
            $table->unsignedBigInteger('idDescuento');
            $table->unsignedBigInteger('idPisina');
            $table->foreign('idAlumno')->references('idAlumno')->on('alumnos')->onDelete('cascade');
            $table->foreign('idDescuento')->references('idDescuento')->on('descuentos')->onDelete('cascade');
            $table->foreign('idPisina')->references('idPisina')->on('pisinas')->onDelete('cascade');

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
        Schema::dropIfExists('inscripcions');
    }
};
