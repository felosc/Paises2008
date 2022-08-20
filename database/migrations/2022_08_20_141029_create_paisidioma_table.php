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
        Schema::create('paisidioma', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('PaisCodigo')->references('PaisCodigo')->on('Pais');
            $table->string('PaisIdioma');
            $table->char('PaisIdiomaOficial', 1);
            $table->float('PaisIdiomaPorcentaje');
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
        Schema::dropIfExists('paisidioma');
    }
};
