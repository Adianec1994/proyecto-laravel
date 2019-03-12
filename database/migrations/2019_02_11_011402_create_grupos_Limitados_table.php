<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGruposLimitadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('grupos_Limitados')) {
            Schema::create('grupos_Limitados', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->increments('idG_Limit');
                $table->text('observaciones')->nullable();
                $table->date('fecha_pos_solucion')->nullable();
                $table->integer('idGrupos')->unsigned();
                $table->integer('idbaterias')->unsigned();
                $table->integer('idCElectr')->unsigned();
                $table->integer('idTecno')->unsigned();
                $table->integer('idProv')->unsigned();
                $table->integer('idempresa')->unsigned();

                $table->index(["idGrupos", "idbaterias", "idCElectr", "idTecno", "idProv", "idempresa"], 'fk_grupos_Limitados_grupos1_idx');


                $table->foreign('idGrupos', 'fk_grupos_Limitados_grupos1_idx')
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
        Schema::dropIfExists('grupos_Limitados');
    }
}
