<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransportistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transportistas', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nombre', 45);
            $table->String('apellido', 45);
            $table->String('cedula', 16);
            $table->String('direccion', 45);
            $table->String('telefono',8);
            $table->integer('idUsers')->unsigned();
            $table->timestamps();           

            $table->foreign('idUsers')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transportistas');
    }
}
