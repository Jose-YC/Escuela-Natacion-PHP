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
        Schema::create('recibos', function (Blueprint $table) {
            $table->id('idRecibo');
            $table->unsignedBigInteger('idInscripcion');
            $table->foreign('idInscripcion')->references('idInscripcion')->on('inscripcions')->onDelete('cascade');
            //fecha,idBanco
            $table->enum('estado',['pendiente','pagado','cancelado'])->default('pendiente');
            $table->unsignedBigInteger('idBanco');
            $table->foreign('idBanco')->references('idBanco')->on('bancos')->onDelete('cascade');
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
        Schema::dropIfExists('recibos');
    }
};
