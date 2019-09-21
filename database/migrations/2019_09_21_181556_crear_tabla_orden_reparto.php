<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaOrdenReparto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_reparto', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('usuario_id');
            $table->foreign('usuario_id','fk_ordenreparto_usuario')->references('id')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('articulos_id');
            $table->foreign('articulos_id','fk_articuloid_articulo')->references('id')->on('articulos')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('cliente_id');
            $table->foreign('cliente_id','fk_clienteid_cliente')->references('id')->on('cliente')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('repartidor_id');
            $table->foreign('repartidor_id','fk_repartidorid_repartidor')->references('id')->on('repartidor')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedTinyInteger('cantidad');
            $table->string('enviado_a',100);
            $table->dateTime('emitido');
            $table->dateTime('finalizado')->nullable();
            $table->boolean('estado');
            $table->string('nota')->nullable();
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
        Schema::dropIfExists('orden_reparto');
    }
}
