<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePailasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('pailas')) {
            Schema::create('pailas', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->increments('idPailas');
                $table->date('fecha')->nullable();
                $table->time('hora')->nullable();
                $table->decimal('comb_factura')->nullable();
                $table->decimal('comb_medicion')->nullable();
                $table->text('nombre_Chofer')->nullable();
                $table->bigInteger('ci_chofer')->nullable();
                $table->text('nombre_Acomp')->nullable();
                $table->bigInteger('ci_acompte')->nullable();
                $table->text('nombre_Recibe')->nullable();
                $table->bigInteger('ci_recibe')->nullable();
                $table->text('acciones')->nullable();
                $table->integer('idCElectricas')->unsigned();
                $table->timestamps();


                $table->index(["idCElectricas"], 'fk_pailas_central_electricas1_idx');

                $table->foreign('idCElectricas', 'fk_pailas_central_electricas1_idx')
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
        Schema::dropIfExists('pailas');
    }
}
