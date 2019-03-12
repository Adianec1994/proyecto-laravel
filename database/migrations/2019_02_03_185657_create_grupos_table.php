<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('grupos')) {
            Schema::create('grupos', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->increments('idGrupos');
                $table->integer('numero')->nullable();
                $table->integer('idbaterias')->unsigned();
                $table->integer('idCElectr')->unsigned();
                $table->integer('idTecno')->unsigned();
                $table->integer('idProv')->unsigned();
                $table->integer('idempresa')->unsigned();

                $table->index(["idbaterias", "idCElectr", "idTecno", "idProv", "idempresa"], 'fk_grupos_baterias1_idx');


                $table->foreign('idbaterias', 'fk_grupos_baterias1_idx')
                    ->references('idbaterias')->on('baterias')
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
        Schema::dropIfExists('grupos');
    }
}
