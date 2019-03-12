<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTotaleventosHasProvinciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('totalEventos_has_provincias')) {
            Schema::create('totalEventos_has_provincias', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->increments('idtotalEv_Prov');
                $table->integer('idtotalEventos')->unsigned();
                $table->integer('idProv')->unsigned();
                $table->integer('idempresa')->unsigned();
                $table->integer('idteleconferencia')->unsigned();

                $table->index(["idProv", "idempresa", "idteleconferencia"], 'fk_totalEventos_has_provincias_provincias1_idx');

                $table->index(["idtotalEventos"], 'fk_totalEventos_has_provincias_totalEventos1_idx');


                $table->foreign('idtotalEventos', 'fk_totalEventos_has_provincias_totalEventos1_idx')
                    ->references('idtotalEventos')->on('totalEventos')
                    ->onDelete('no action')
                    ->onUpdate('no action');

                $table->foreign('idProv', 'fk_totalEventos_has_provincias_provincias1_idx')
                    ->references('idProv')->on('provincias')
                    ->onDelete('no action')
                    ->onUpdate('no action');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('totalEventos_has_provincias');
    }
}
