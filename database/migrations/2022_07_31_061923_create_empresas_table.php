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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id('idEmpresa');
            $table->integer('descuento')->default(10);
            $table->unsignedBigInteger('idAlumno');
            $table->unsignedBigInteger('idDetalleEmpresa');
            $table->foreign('idAlumno')->references('idAlumno')->on('alumnos')->onDelete('cascade');
            $table->foreign('idDetalleEmpresa')->references('idDetalleEmpresa')->on('detalle__empresas')->onDelete('cascade');
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
        Schema::dropIfExists('empresas');
    }
};
