<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoberturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('coberturas')) {
            Schema::create('coberturas', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->increments('idCoberturas');
                $table->integer('existenciaTotal')->nullable();
                $table->integer('planReserva')->nullable();
                $table->integer('fondaje')->nullable();
                $table->integer('existOperativa')->nullable();
                $table->time('cobertura')->nullable();
                $table->time('consumo')->nullable();
                $table->decimal('suminCupet')->nullable();
                $table->integer('idCElectr')->unsigned();
                $table->integer('idTecno')->unsigned();
                $table->integer('idProv')->unsigned();
                $table->integer('idempresa')->unsigned();

                $table->index(["idCElectr", "idTecno", "idProv", "idempresa"], 'fk_coberturas_central_Electricas1_idx');


                $table->foreign('idCElectr', 'fk_coberturas_central_Electricas1_idx')
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
        Schema::dropIfExists('coberturas');
    }
}
