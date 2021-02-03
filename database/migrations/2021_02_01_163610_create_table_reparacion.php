<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableReparacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_reparacion', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idMovil')->unsigned();
            $table->string('descripcion_reparacion');
            $table->double('precio_reparacion');
            $table->foreign('idMovil')->references('id')->on('table_movil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_reparacion');
    }
}
