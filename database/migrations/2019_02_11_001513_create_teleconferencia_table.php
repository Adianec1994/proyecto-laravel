<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeleconferenciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('teleconferencia')) {
            Schema::create('teleconferencia', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->increments('idteleconferencia');
                $table->decimal('pot_Plan')->nullable();
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
        Schema::dropIfExists('teleconferencia');
    }
}
