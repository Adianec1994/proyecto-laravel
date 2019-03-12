<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('grupos')) {
            Schema::create('grupos', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->increments('idGrupos');
                $table->integer('numero')->nullable();
                $table->decimal('pot_instalada')->nullable();
                $table->decimal('pot_disponible')->nullable();
                $table->decimal('potIndispMtto')->nullable();
                $table->decimal('potIndispAveria')->nullable();
                $table->integer('idBaterias')->unsigned();
                $table->integer('idCElectricas')->unsigned();
                $table->integer('idProvincias')->unsigned();
                $table->integer('idEmpresas')->unsigned();
                $table->integer('idPotencias')->unsigned();
                $table->timestamps();

                $table->index(["idPotencias"], 'fk_grupos_potencias1_idx');

                $table->index(["idBaterias", "idCElectricas", "idProvincias", "idEmpresas"], 'fk_grupos_baterias1_idx');

                $table->foreign('idBaterias', 'fk_grupos_baterias1_idx')
                    ->references('idBaterias')->on('baterias')
                    ->onDelete('no action')
                    ->onUpdate('no action');

                $table->foreign('idPotencias', 'fk_grupos_potencias1_idx')
                    ->references('idPotencias')->on('potencias')
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
        Schema::dropIfExists('grupos');
    }
}
