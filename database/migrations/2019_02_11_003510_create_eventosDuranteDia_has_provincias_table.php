<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosdurantediaHasProvinciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('eventosDuranteDia_has_provincias')) {
            Schema::create('eventosDuranteDia_has_provincias', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->increments('ideventosDia_Prov');
                $table->integer('ideventosDuranteDia')->unsigned();
                $table->integer('idProv')->unsigned();
                $table->integer('idempresa')->unsigned();
                $table->integer('idteleconferencia')->unsigned();

                $table->index(["ideventosDuranteDia"], 'fk_eventosDuranteDia_has_provincias_eventosDuranteDia1_idx');

                $table->index(["idProv", "idempresa", "idteleconferencia"], 'fk_eventosDuranteDia_has_provincias_provincias1_idx');


                $table->foreign('ideventosDuranteDia', 'fk_eventosDuranteDia_has_provincias_eventosDuranteDia1_idx')
                    ->references('ideventosDuranteDia')->on('eventosDuranteDia')
                    ->onDelete('no action')
                    ->onUpdate('no action');

                $table->foreign('idProv', 'fk_eventosDuranteDia_has_provincias_provincias1_idx')
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
        Schema::dropIfExists('eventosDuranteDia_has_provincias');
    }
}
