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
        Schema::create('categoria', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamps();
        });
        Schema::create('subcategoria', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->bigInteger('id_categoria')->unsigned()->index();
            $table->timestamps();
            $table->foreign('id_categoria')->references('id')->on('categoria')->onDelete('cascade');  
        });


        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo');
            $table->string('nombre');
            $table->string('descripcion');
            $table->integer('unidad_medida');
            $table->bigInteger('cantidad');
            $table->float('precio_base');
            $table->integer('unidad_minima');
            $table->string('estado');
            $table->integer('unidad_maxima');
            $table->string('url_img');
            $table->bigInteger('id_categoria')->unsigned()->index();
            $table->bigInteger('id_subcategoria')->unsigned()->index();
            $table->integer('carruselhome1')->nulled();
            $table->integer('carruselhome2')->nulled();
            $table->timestamps();
            $table->foreign('id_categoria')->references('id')->on('categoria')->onDelete('cascade');
            $table->foreign('id_subcategoria')->references('id')->on('subcategoria')->onDelete('cascade');        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categoria');
        Schema::dropIfExists('subcategoria');
        Schema::dropIfExists('productos');
    }
}
