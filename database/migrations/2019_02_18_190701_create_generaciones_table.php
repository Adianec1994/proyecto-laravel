<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneracionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('generaciones')) {
            Schema::create('generaciones', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->increments('idGener');
                $table->date('fecha')->nullable();
                $table->time('hEntradaAM')->nullable();
                $table->time('hSalidaAM')->nullable();
                $table->time('hEntradaM')->nullable();
                $table->time('hSalidaM')->nullable();
                $table->time('hEntradaPM')->nullable();
                $table->time('hSalidaPM')->nullable();
                $table->text('reporta')->nullable();
                $table->time('tiempoOperacion')->nullable();
                $table->integer('idGrupos')->unsigned();
                $table->timestamps();

                $table->index(["idGrupos"], 'fk_generaciones_grupos1_idx');

                $table->foreign('idGrupos', 'fk_generaciones_grupos1_idx')
                    ->references('idGrupos')->on('grupos')
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
        Schema::dropIfExists('generaciones');
    }
}
