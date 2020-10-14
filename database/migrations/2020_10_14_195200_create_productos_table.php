<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo');
            $table->string('nombre');
            $table->string('descripción');
            $table->integer('unidad_medida');
            $table->bigInteger('cantidad');
            $table->float('precio_base');
            $table->integer('unidad_minima');
            $table->string('estado');
            $table->integer('unidad_maxima');
            $table->string('url_img');
            $table->string('categoria');
            $table->string('subcategoria');
            $table->integer('carruselhome1')->nulled();
            $table->integer('carruselhome2')->nulled();
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
        Schema::dropIfExists('productos');
    }
}
