<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoMantenimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tipoMantenimientos')) {
            Schema::create('tipoMantenimientos', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->increments('idTipoMtto');
                $table->integer('tipo')->nullable();
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
        Schema::dropIfExists('tipoMantenimientos');
    }
}
