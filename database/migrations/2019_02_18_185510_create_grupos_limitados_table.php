<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGruposLimitadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('grupos_limitados')) {
            Schema::create('grupos_limitados', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->increments('idGrupos');
                $table->decimal('cantPotLimitada')->nullable();
                $table->text('observaciones')->nullable();
                $table->date('fechaPosSolucion')->nullable();
                $table->timestamps();

                $table->index(["idGrupos"], 'fk_grupos_limitados_grupos1_idx');


                $table->foreign('idGrupos', 'fk_grupos_limitados_grupos1_idx')
                    ->references('idGrupos')->on('grupos')
                    ->onDelete('cascade')
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
        Schema::dropIfExists('grupos_limitados');
    }
}
