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
                $table->integer('comb_Fact')->nullable();
                $table->integer('comb_Medicion')->nullable();
                $table->decimal('diferencia')->nullable();
                $table->string('causa', 250)->nullable();
                $table->string('nombre_Chofer', 45)->nullable();
                $table->string('nombre_Acomp', 45)->nullable();
                $table->string('nombre_Recibe', 45)->nullable();
                $table->integer('c_Ident')->nullable();
                $table->text('acciones')->nullable();
                $table->decimal('difX100')->nullable();
                $table->integer('idCElectr')->unsigned();
                $table->integer('idTecno')->unsigned();
                $table->integer('idProv')->unsigned();
                $table->integer('idempresa')->unsigned();

                $table->index(["idCElectr", "idTecno", "idProv", "idempresa"], 'fk_pailas_central_Electricas1_idx');


                $table->foreign('idCElectr', 'fk_pailas_central_Electricas1_idx')
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
        Schema::dropIfExists('pailas');
    }
}
