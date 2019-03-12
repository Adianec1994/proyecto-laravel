<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneracionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('generaciones')) {
            Schema::create('generaciones', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->increments('idGener');
                $table->dateTime('hEntradaAM')->nullable();
                $table->dateTime('hSalidaAM')->nullable();
                $table->dateTime('hEntradaM')->nullable();
                $table->dateTime('hSalidaM')->nullable();
                $table->dateTime('hEntradaPM')->nullable();
                $table->dateTime('hSalidaPM')->nullable();
                $table->string('reporta', 45)->nullable();
                $table->dateTime('tiempoTrabajo')->nullable();
                $table->integer('idGrupos')->unsigned();
                $table->integer('idbaterias')->unsigned();
                $table->integer('idCElectr')->unsigned();
                $table->integer('idTecno')->unsigned();
                $table->integer('idProv')->unsigned();
                $table->integer('idempresa')->unsigned();

                $table->index(["idGrupos", "idbaterias", "idCElectr", "idTecno", "idProv", "idempresa"], 'fk_generaciones_grupos1_idx');


                $table->foreign('idGrupos', 'fk_generaciones_grupos1_idx')
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
        Schema::dropIfExists('generaciones');
    }
}
