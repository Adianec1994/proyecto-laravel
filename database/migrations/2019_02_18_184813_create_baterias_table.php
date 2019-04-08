<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('baterias')) {
            Schema::create('baterias', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->increments('idBaterias');
                $table->integer('numero')->nullable();
                $table->integer('cantidad_grupos')->nullable();
                $table->integer('idCElectricas')->unsigned();
                $table->boolean('activo')->default(true);
                $table->timestamps();

                $table->index(["idCElectricas"], 'fk_baterias_central_electricas1_idx');

                $table->foreign('idCElectricas', 'fk_baterias_central_electricas1_idx')
                    ->references('idCElectricas')->on('central_electricas')
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
        Schema::dropIfExists('baterias');
    }
}
