<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndispHasCentralElectricasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('indisp_has_central_Electricas')) {
            Schema::create('indisp_has_central_Electricas', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->increments('idindisp_has_c_Elect');
                $table->integer('idIndisp')->unsigned();
                $table->integer('idCElectr')->unsigned();
                $table->integer('idTecno')->unsigned();
                $table->integer('idProv')->unsigned();
                $table->integer('idempresa')->unsigned();

                $table->index(["idCElectr", "idTecno", "idProv", "idempresa"], 'fk_indisponibles_has_central_Electricas_central_Electricas1_idx');

                $table->index(["idIndisp"], 'fk_indisponibles_has_central_Electricas_indisponibles1_idx');


                $table->foreign('idIndisp', 'fk_indisponibles_has_central_Electricas_indisponibles1_idx')
                    ->references('idIndisp')->on('indisponibles')
                    ->onDelete('no action')
                    ->onUpdate('no action');

                $table->foreign('idCElectr', 'fk_indisponibles_has_central_Electricas_central_Electricas1_idx')
                    ->references('idCElectr')->on('central_Electricas')
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
        Schema::dropIfExists('indisp_has_central_Electricas');
    }
}
