<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePotenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('potencias')) {
            Schema::create('potencias', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->increments('idPotencias');
                $table->decimal('cantidad')->nullable();
                $table->string('retirado_potencia', 45)->nullable();
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
        Schema::dropIfExists('potencias');
    }
}
