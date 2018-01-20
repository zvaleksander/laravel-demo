<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDominiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dominios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_parametro')->unsigned();
            $table->text('descripcion');
            $table->tinyInteger('estado')->default(1);
            $table->timestamps();

            $table->foreign('id_parametro')
                  ->references('id')
                  ->on('parametros')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dominios');
    }
}