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
                $table->increments('idProvincias');
                $table->text('nombre')->nullable();
                $table->integer('cantidad_centrales')->nullable();
                $table->decimal('pot_planificada')->nullable();
                $table->integer('idEmpresas')->unsigned();
                $table->boolean('activo')->default(true);
                $table->timestamps();

                $table->index(["idEmpresas"], 'fk_provincias_empresas_idx');

                $table->foreign('idEmpresas', 'fk_provincias_empresas_idx')
                    ->references('idEmpresas')->on('empresas')
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
        Schema::dropIfExists('provincias');
    }
}
