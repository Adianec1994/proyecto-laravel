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
                $table->decimal('planReserva')->nullable();
                $table->decimal('fondaje')->nullable();
                $table->decimal('existOperativa')->nullable();
                $table->time('coberturaHoras')->nullable();
                $table->decimal('consumo')->nullable();
                $table->decimal('suminCupet')->nullable();
                $table->decimal('capacTotalAlmac')->nullable();
                $table->decimal('capacVacio')->nullable();
                $table->decimal('existTotalDiaAnterior')->nullable();
                $table->integer('idCElectricas')->unsigned();
                $table->boolean('activo')->default(true);
                $table->timestamps();

                $table->index(["idCElectricas"], 'fk_coberturas_central_electricas1_idx');

                $table->foreign('idCElectricas', 'fk_coberturas_central_electricas1_idx')
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
        Schema::dropIfExists('coberturas');
    }
}
