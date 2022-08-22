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

        if (Schema::hasColumn('ciudad', 'id')) {
            //pais->ciudad_id
            Schema::table('pais', function (Blueprint $table) {
                $table->foreign('PaisCapital')->references('id')->on('ciudad');
            });
        };
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foreings');
    }
};
