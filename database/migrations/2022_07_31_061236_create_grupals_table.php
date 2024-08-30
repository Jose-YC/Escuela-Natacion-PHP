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
        Schema::create('grupals', function (Blueprint $table) {
            $table->id('idGrupal');
            $table->unsignedBigInteger('idAlumno');
            $table->integer('descuento')->default(5);
            $table->foreign('idAlumno')->references('idAlumno')->on('alumnos')->onDelete('cascade');
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
        Schema::dropIfExists('grupals');
    }
};
