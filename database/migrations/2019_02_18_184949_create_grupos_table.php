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
                $table->integer('idEstados')->unsigned();
                $table->boolean('activo')->default(true);
                $table->timestamps();


                $table->index(["idEstados"], 'fk_grupos_estados1_idx');
                $table->index(["idBaterias"], 'fk_grupos_baterias1_idx');

                $table->foreign('idBaterias', 'fk_grupos_baterias1_idx')
                    ->references('idBaterias')->on('baterias')
                    ->onDelete('no action')
                    ->onUpdate('no action');

                $table->foreign('idEstados', 'fk_grupos_estados1_idx')
                    ->references('idEstados')->on('estados')
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
