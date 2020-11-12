<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriaCliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria_cliente', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_cliente')->unsigned()->index();
            $table->bigInteger('id_subcategoria')->unsigned()->index();
            $table->bigInteger('id_tipodcto')->unsigned()->index();
            $table->timestamps();
            
            $table->foreign('id_cliente')->references('identificacion')->on('clientes')->onDelete('cascade');
            $table->foreign('id_subcategoria')->references('id')->on('subcategoria')->onDelete('cascade');
            $table->foreign('id_tipodcto')->references('id')->on('tipo_dcto')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categoria_cliente');
    }
}
