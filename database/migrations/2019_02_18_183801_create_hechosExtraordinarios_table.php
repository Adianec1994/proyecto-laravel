<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHechosextraordinariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('hechosExtraordinarios')) {
            Schema::create('hechosExtraordinarios', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->increments('idHechos');
                $table->date('fecha')->nullable();
                $table->dateTime('hora')->nullable();
                $table->text('descripcion')->nullable();
                $table->text('medidas')->nullable();
                $table->text('nombreImplicado')->nullable();
                $table->text('nombreInforma')->nullable();
                $table->integer('idtipoHechos')->unsigned();
                $table->integer('idProvincias')->unsigned();
                $table->timestamps();

                $table->index(["idProvincias"], 'fk_tipoHechos_has_provincias_provincias1_idx');

                $table->index(["idtipoHechos"], 'fk_tipoHechos_has_provincias_tipoHechos1_idx');

                $table->foreign('idtipoHechos', 'fk_tipoHechos_has_provincias_tipoHechos1_idx')
                    ->references('idtipoHechos')->on('tipoHechos')
                    ->onDelete('no action')
                    ->onUpdate('no action');

                $table->foreign('idProvincias', 'fk_tipoHechos_has_provincias_provincias1_idx')
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
        Schema::dropIfExists('hechosExtraordinarios');
    }
}
