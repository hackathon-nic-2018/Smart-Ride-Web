<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnidadTransportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidad_transportes', function (Blueprint $table) {
            $table->increments('id');
            $table->String('marca', 50);
            $table->String('descripcion', 200);
            $table->String('placa', 20);
            $table->integer('idTransportista')->unsigned();
            $table->integer('idColegio')->unsigned();
            $table->timestamps();
            $table->foreign('idTransportista')->references('id')->on('transportistas');
            $table->foreign('idColegio')->references('id')->on('colegios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unidad_transportes');
    }
}
