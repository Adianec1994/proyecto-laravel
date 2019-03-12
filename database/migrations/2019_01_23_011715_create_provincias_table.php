<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvinciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('provincias')) {
            Schema::create('provincias', function (Blueprint $table) {

                $table->engine = 'InnoDB';
                $table->increments('idProv');
                $table->string('nombre', 45)->nullable();
                $table->decimal('potDispProv')->nullable();
                $table->decimal('potIndispXMttoProv')->nullable();
                $table->decimal('potIndispXAveriaProv')->nullable();
                $table->decimal('potTotalProv')->nullable();
                $table->integer('idempresa')->unsigned();
                $table->integer('idteleconferencia')->unsigned();

                $table->index(["idempresa"], 'fk_provincias_empresa1_idx');

                $table->index(["idteleconferencia"], 'fk_provincias_teleconferencia1_idx');


                $table->foreign('idempresa', 'fk_provincias_empresa1_idx')
                    ->references('idempresa')->on('empresa')
                    ->onDelete('no action')
                    ->onUpdate('no action');

                $table->foreign('idteleconferencia', 'fk_provincias_teleconferencia1_idx')
                    ->references('idteleconferencia')->on('teleconferencia')
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
        Schema::dropIfExists('provincias');
    }
}
