<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePotdispxtecnolHasGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('potDispXTecnol_has_grupos')) {
            Schema::create('potDispXTecnol_has_grupos', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->increments('idpotDispXTecnol_has_grupos');
                $table->integer('idpotDispTecnologia')->unsigned();
                $table->integer('idGrupos')->unsigned();
                $table->integer('idbaterias')->unsigned();
                $table->integer('idCElectr')->unsigned();
                $table->integer('idTecno')->unsigned();
                $table->integer('idProv')->unsigned();
                $table->integer('idempresa')->unsigned();

                $table->index(["idGrupos", "idbaterias", "idCElectr", "idTecno", "idProv", "idempresa"], 'fk_potDispXTecnologia_has_grupos_grupos1_idx');

                $table->index(["idpotDispTecnologia"], 'fk_potDispXTecnologia_has_grupos_potDispXTecnologia1_idx');


                $table->foreign('idpotDispTecnologia', 'fk_potDispXTecnologia_has_grupos_potDispXTecnologia1_idx')
                    ->references('idpotDispTecnologia')->on('potDispXTecnologia')
                    ->onDelete('no action')
                    ->onUpdate('no action');

                $table->foreign('idGrupos', 'fk_potDispXTecnologia_has_grupos_grupos1_idx')
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
        Schema::dropIfExists('potDispXTecnol_has_grupos');
    }
}
