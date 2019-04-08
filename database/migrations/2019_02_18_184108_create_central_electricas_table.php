<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCentralElectricasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('central_electricas')) {
            Schema::create('central_electricas', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->increments('idCElectricas');
                $table->text('nombre')->nullable();
                $table->integer('cantidad_baterias')->nullable();
                $table->decimal('potIndispTM')->nullable();
                $table->integer('idProvincias')->unsigned();
                $table->integer('idDatosGenerales')->unsigned();
                $table->integer('idTecnologias')->unsigned();
                $table->boolean('activo')->default(true);
                $table->timestamps();

                $table->index(["idDatosGenerales"], 'fk_central_electricas_datosGenerales1_idx');

                $table->index(["idProvincias"], 'fk_central_electricas_provincias1_idx');

                $table->index(["idTecnologias"], 'fk_central_electricas_tecnologias1_idx');

                $table->foreign('idProvincias', 'fk_central_electricas_provincias1_idx')
                    ->references('idProvincias')->on('provincias')
                    ->onDelete('no action')
                    ->onUpdate('no action');

                $table->foreign('idDatosGenerales', 'fk_central_electricas_datosGenerales1_idx')
                    ->references('idDatosGenerales')->on('datosGenerales')
                    ->onDelete('no action')
                    ->onUpdate('no action');

                $table->foreign('idTecnologias', 'fk_central_electricas_tecnologias1_idx')
                    ->references('idTecnologias')->on('tecnologias')
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
        Schema::dropIfExists('central_electricas');
    }
}
