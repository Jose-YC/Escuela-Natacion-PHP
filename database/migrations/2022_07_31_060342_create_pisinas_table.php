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
        Schema::create('pisinas', function (Blueprint $table) {
            $table->id('idPisina');
            $table->string('lugar');
            $table->string('especificacion')->nullable();
            $table->string('profundidad');
            $table->string('ancho');
            $table->string('alto');
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
        Schema::dropIfExists('pisinas');
    }
};
