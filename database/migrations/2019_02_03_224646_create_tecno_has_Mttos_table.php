<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTecnoHasMttosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tecno_has_Mttos')) {
            Schema::create('tecno_has_Mttos', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->increments('idtecno_has_Mttos');
                $table->integer('idTecno')->unsigned();
                $table->integer('idMtto')->unsigned();

                $table->index(["idMtto"], 'fk_Tecnologia_has_Mantenimiento_Mantenimiento1_idx');

                $table->index(["idTecno"], 'fk_Tecnologia_has_Mantenimiento_Tecnologia1_idx');


                $table->foreign('idTecno', 'fk_Tecnologia_has_Mantenimiento_Tecnologia1_idx')
                    ->references('idTecno')->on('tecnologias')
                    ->onDelete('no action')
                    ->onUpdate('no action');

                $table->foreign('idMtto', 'fk_Tecnologia_has_Mantenimiento_Mantenimiento1_idx')
                    ->references('idMtto')->on('mantenimientos')
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
        Schema::dropIfExists('tecno_has_Mttos');
    }
}
