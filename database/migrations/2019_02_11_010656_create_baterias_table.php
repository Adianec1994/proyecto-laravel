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
                $table->increments('idbaterias');
                $table->integer('numero')->nullable();
                $table->decimal('potDispBat')->nullable();
                $table->decimal('potIndispXMttoBat')->nullable();
                $table->decimal('potIndispXAveriaBat')->nullable();
                $table->decimal('potTotalBat')->nullable();
                $table->integer('idCElectr')->unsigned();
                $table->integer('idTecno')->unsigned();
                $table->integer('idProv')->unsigned();
                $table->integer('idempresa')->unsigned();

                $table->index(["idCElectr", "idTecno", "idProv", "idempresa"], 'fk_baterias_central_Electricas1_idx');


                $table->foreign('idCElectr', 'fk_baterias_central_Electricas1_idx')
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
        Schema::dropIfExists('baterias');
    }
}
