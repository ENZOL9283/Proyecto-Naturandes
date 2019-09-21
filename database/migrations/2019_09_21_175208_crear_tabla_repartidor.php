<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaRepartidor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repartidor', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_repart',20);
            $table->string('apellido_repart',20);
            $table->string('slug',6);
            $table->string('unidad_movil',10);
            $table->string('email_repart', 35);
            $table->string('telefono_repart', 45);
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
        Schema::dropIfExists('repartidor');
    }
}
