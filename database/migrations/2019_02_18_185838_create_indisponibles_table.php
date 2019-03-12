<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndisponiblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('indisponibles')) {
            Schema::create('indisponibles', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->increments('idIndisponibles');
                $table->date('fechaAveria')->nullable();
                $table->text('diagnostico')->nullable();
                $table->date('fechaSolucion')->nullable();
                $table->integer('idGrupos')->unsigned();
                $table->integer('idPotencias')->unsigned();
                $table->integer('idTipoIndisp')->unsigned();
                $table->integer('idBaterias')->unsigned();
                $table->integer('idCElectricas')->unsigned();
                $table->integer('idProvincias')->unsigned();
                $table->integer('idEmpresas')->unsigned();
                $table->timestamps();

                $table->index(["idGrupos", "idBaterias", "idCElectricas", "idProvincias", "idEmpresas", "idPotencias"], 'fk_tiposIndisponibilidades_has_grupos_grupos1_idx');

                $table->index(["idTipoIndisp"], 'fk_tiposIndisponibilidades_has_grupos_tiposIndisponibilidad_idx');


                $table->foreign('idTipoIndisp', 'fk_tiposIndisponibilidades_has_grupos_tiposIndisponibilidad_idx')
                    ->references('idTipoIndisp')->on('tiposIndisponibilidades')
                    ->onDelete('no action')
                    ->onUpdate('no action');

                $table->foreign('idGrupos', 'fk_tiposIndisponibilidades_has_grupos_grupos1_idx')
                    ->references('idGrupos')->on('grupos')
                    ->onDelete('no action')
                    ->onUpdate('no action');
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
        Schema::dropIfExists('indisponibles');
    }
}
