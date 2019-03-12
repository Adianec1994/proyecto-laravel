<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoberturas24HorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('coberturas24horas')) {
            Schema::create('coberturas24horas', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->increments('idcob24horas');
                $table->integer('existTotalDiaAnterior')->nullable();
                $table->integer('idcob10horas')->unsigned();
                $table->integer('idCoberturas')->unsigned();
                $table->integer('idCElectr')->unsigned();
                $table->integer('idTecno')->unsigned();
                $table->integer('idProv')->unsigned();
                $table->integer('idempresa')->unsigned();

                $table->index(["idcob10horas", "idCoberturas", "idCElectr", "idTecno", "idProv", "idempresa"], 'fk_coberturas24horas_coberturas10horas1_idx');


                $table->foreign('idcob10horas', 'fk_coberturas24horas_coberturas10horas1_idx')
                    ->references('idcob10horas')->on('coberturas10horas')
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
        Schema::dropIfExists('coberturas24horas');
    }
}
