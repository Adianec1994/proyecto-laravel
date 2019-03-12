<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMantenimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('mantenimientos')) {
            Schema::create('mantenimientos', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->increments('idMttos');
                $table->date('fechaMtto')->nullable();
                $table->text('nombreJBrigada')->nullable();
                $table->integer('numeroBrigada')->nullable();
                $table->time('cantHoras')->nullable();
                $table->integer('idTipoMtto')->unsigned();
                $table->integer('idDatosGenerales')->unsigned();
                $table->integer('idTecnologias')->unsigned();
                $table->integer('idCElectricas')->unsigned();
                $table->integer('idProvincias')->unsigned();
                $table->integer('idEmpresas')->unsigned();
                $table->timestamps();

                $table->index(["idCElectricas", "idProvincias", "idEmpresas", "idDatosGenerales", "idTecnologias"], 'fk_tipoMantenimientos_has_central_electricas_central_electr_idx');

                $table->index(["idTipoMtto"], 'fk_tipoMantenimientos_has_central_electricas_tipoMantenimie_idx');

                $table->foreign('idTipoMtto', 'fk_tipoMantenimientos_has_central_electricas_tipoMantenimie_idx')
                    ->references('idTipoMtto')->on('tipoMantenimientos')
                    ->onDelete('no action')
                    ->onUpdate('no action');

                $table->foreign('idCElectricas', 'fk_tipoMantenimientos_has_central_electricas_central_electr_idx')
                    ->references('idCElectricas')->on('central_electricas')
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
        Schema::dropIfExists('mantenimientos');
    }
}
