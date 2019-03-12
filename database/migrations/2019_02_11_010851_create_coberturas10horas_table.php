<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoberturas10HorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('coberturas10horas')) {
            Schema::create('coberturas10horas', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->increments('idcob10horas');
                $table->integer('capacTotalAlmac')->nullable();
                $table->integer('capacVacio')->nullable();
                $table->integer('idCoberturas')->unsigned();
                $table->integer('idCElectr')->unsigned();
                $table->integer('idTecno')->unsigned();
                $table->integer('idProv')->unsigned();
                $table->integer('idempresa')->unsigned();

                $table->index(["idCoberturas", "idCElectr", "idTecno", "idProv", "idempresa"], 'fk_coberturas10horas_coberturas1_idx');


                $table->foreign('idCoberturas', 'fk_coberturas10horas_coberturas1_idx')
                    ->references('idCoberturas')->on('coberturas')
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
        Schema::dropIfExists('coberturas10horas');
    }
}
