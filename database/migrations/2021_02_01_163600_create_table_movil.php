<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableMovil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_movil', function (Blueprint $table) {
            $table->id();
            $table->string('url',300);
            $table->string('marca',80);
            $table->string('modelo',80);
            $table->string('descripcion_movil',600);
            $table->double('precio_movil');
            $table->integer('numero_reparaciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_movil');
    }
}
