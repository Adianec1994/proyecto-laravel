<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmergenciasTable extends Migration
{
    /**
     * Run the migrations.
     * @table emergencias
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('emergencias')) {
            Schema::create('emergencias', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->increments('idEmergencias');
                $table->text('cliente')->nullable();
                $table->text('grupo')->nullable();
                $table->text('evento')->nullable();
                $table->text('estado_grupo')->nullable();
                $table->text('informo')->nullable();
                $table->integer('idProvincias')->unsigned();
                $table->boolean('activo')->default(true);

                $table->index(["idProvincias"], 'fk_emergencias_provincias1_idx');


                $table->foreign('idProvincias', 'fk_emergencias_provincias1_idx')
                    ->references('idProvincias')->on('provincias')
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
       Schema::dropIfExists('emergencias');
     }
}
