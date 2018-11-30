<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagenUnidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagen-unidades', function (Blueprint $table) {
            $table->increments('id');
            $table->String('imagen', 100);
            $table->integer('idUnidad')->unsigned();
            $table->timestamps();
            $table->foreign('idUnidad')->references('id')->on('unidad_transportes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imagen-unidades');
    }
}
