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
        if (!Schema::hasTable('central_Electricas')) {
            Schema::create('central_Electricas', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->increments('idCElectr');
                $table->string('nombre', 45)->nullable();
                $table->decimal('potDispCE')->nullable();
                $table->decimal('potIndispXMttoCE')->nullable();
                $table->decimal('potIndispXAveriaCE')->nullable();
                $table->decimal('potTotalCE')->nullable();
                $table->integer('idTecno')->unsigned();
                $table->integer('idProv')->unsigned();
                $table->integer('idempresa')->unsigned();
                $table->integer('todoDiesel_idtodoDiesel')->unsigned();

                $table->index(["todoDiesel_idtodoDiesel"], 'fk_central_Electricas_todoDiesel1_idx');

                $table->index(["idTecno"], 'fk_Grupo_Tecnologia1_idx');

                $table->index(["idProv", "idempresa"], 'fk_central_Electricas_provincias1_idx');


                $table->foreign('idTecno', 'fk_Grupo_Tecnologia1_idx')
                    ->references('idTecno')->on('tecnologias')
                    ->onDelete('no action')
                    ->onUpdate('no action');

                $table->foreign('idProv', 'fk_central_Electricas_provincias1_idx')
                    ->references('idProv')->on('provincias')
                    ->onDelete('no action')
                    ->onUpdate('no action');

                $table->foreign('todoDiesel_idtodoDiesel', 'fk_central_Electricas_todoDiesel1_idx')
                    ->references('idtodoDiesel')->on('todoDiesel')
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
        Schema::dropIfExists('central_Electricas');
    }
}
