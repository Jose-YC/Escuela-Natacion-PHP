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
        Schema::create('apoderado__alummos', function (Blueprint $table) {
            $table->id('idApoderado__Alumno');
            $table->unsignedBigInteger('idApoderado');
            $table->foreign('idApoderado')->references('idApoderado')->on('apoderados');
            $table->unsignedBigInteger('idAlumno');
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
        Schema::dropIfExists('apoderado__alummos');
    }
};
