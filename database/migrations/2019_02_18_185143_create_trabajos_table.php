<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrabajosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('trabajos')) {
            Schema::create('trabajos', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->increments('idTrabajos');
                $table->date('fechaReparacion')->nullable();
                $table->text('tipoTrabajo')->nullable();
                $table->time('horaEntrada')->nullable();
                $table->time('horaSalida')->nullable();
                $table->text('estadoGrupo')->nullable();
                $table->integer('idMCV')->unsigned();
                $table->integer('idGrupos')->unsigned();
                $table->timestamps();

                $table->index(["idGrupos"], 'fk_MCV_has_grupos_grupos1_idx');

                $table->index(["idMCV"], 'fk_MCV_has_grupos_MCV1_idx');

                $table->foreign('idMCV', 'fk_MCV_has_grupos_MCV1_idx')
                    ->references('idMCV')->on('MCV')
                    ->onDelete('no action')
                    ->onUpdate('no action');

                $table->foreign('idGrupos', 'fk_MCV_has_grupos_grupos1_idx')
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
        Schema::dropIfExists('trabajos');
    }
}
