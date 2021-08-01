<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaAjustes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ajustes', function (Blueprint $table) {
            $table->id();
            $table->mediumInteger("id_producto");
            $table->date("fecha_ajuste");
            $table->smallInteger("cantidad");
            $table->char("tipo_ajuste",1);
            $table->mediumInteger("id_usuario");
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
        Schema::dropIfExists('ajustes');
    }
}
