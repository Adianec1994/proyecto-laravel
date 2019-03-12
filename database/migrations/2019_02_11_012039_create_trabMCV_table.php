<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrabmcvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('trabMCV')) {
            Schema::create('trabMCV', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->increments('idtrabMCV');
                $table->date('fecha')->nullable();
                $table->string('tipoTrabajo', 45)->nullable();
                $table->dateTime('horaEntrada')->nullable();
                $table->dateTime('hSalida')->nullable();
                $table->string('estadoGrupo', 45)->nullable();
                $table->string('informa', 45)->nullable();
                $table->integer('idGrupos')->unsigned();
                $table->integer('idbaterias')->unsigned();
                $table->integer('idCElectr')->unsigned();
                $table->integer('idTecno')->unsigned();
                $table->integer('idProv')->unsigned();
                $table->integer('idempresa')->unsigned();

                $table->index(["idGrupos", "idbaterias", "idCElectr", "idTecno", "idProv", "idempresa"], 'fk_trabMCV_grupos1_idx');


                $table->foreign('idGrupos', 'fk_trabMCV_grupos1_idx')
                    ->references('idGrupos')->on('grupos')
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
        Schema::dropIfExists('trabMCV');
    }
}
