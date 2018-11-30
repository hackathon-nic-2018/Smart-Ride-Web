<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHijosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hijos', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nombres', 45);
            $table->String('apellidos', 45);
            $table->String('qr', 90);
            $table->integer('idColegio')->unsigned();
            $table->timestamps();           

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
        Schema::dropIfExists('hijos');
    }
}
