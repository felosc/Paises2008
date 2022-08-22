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
        Schema::create('pais', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
            $table->char('PaisCodigo', 3);
            $table->string('PaisNombre');
            $table->string('PaisContinente');
            $table->string('PaisRegion');
            $table->float('PaisArea');
            $table->smallInteger('PaisIndependencia');
            $table->integer('PaisPoblacion');
            $table->float('PaisExpectativaDeVida');
            $table->float('PaisProductoInternoBruto');
            $table->float('PaisProductoInternoBrutoAntiguo');
            $table->string('PaisNombreLocal');
            $table->string('PaisGobierno');
            $table->string('PaisJefeDeEstado');
            $table->bigInteger('PaisCapital')->nullable();
            $table->char('PaisCodigo2', 3);
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
        Schema::dropIfExists('pais');
    }
};
