<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCartDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrito_det', function (Blueprint $table) {
            $table->id();
            $table->integer('id_carrito')->unsigned()->index();
            $table->integer('id_producto')->unsigned()->index();
            $table->integer('cantidad');
            $table->bigInteger('precio');
            $table->timestamps();
            $table->foreign('id_producto')->references('id')->on('productos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carrito_det');
    }
}
