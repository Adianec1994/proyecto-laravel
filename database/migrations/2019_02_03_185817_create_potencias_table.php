<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePotenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('potencias')) {
            Schema::create('potencias', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->increments('idPot');
                $table->decimal('cantidad')->nullable();
                $table->boolean('retirado_potencia');
                $table->integer('idTecno')->unsigned();

                $table->index(["idTecno"], 'fk_Potencia_Tecnologia1_idx');


                $table->foreign('idTecno', 'fk_Potencia_Tecnologia1_idx')
                    ->references('idTecno')->on('tecnologias')
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
        Schema::dropIfExists('potencias');
    }
}
