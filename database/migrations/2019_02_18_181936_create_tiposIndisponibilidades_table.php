<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTiposindisponibilidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tiposIndisponibilidades')) {
            Schema::create('tiposIndisponibilidades', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->increments('idTipoIndisp');
                $table->text('tipo')->nullable();
                $table->boolean('activo')->default(true);
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
        Schema::dropIfExists('tiposIndisponibilidades');
    }
}
