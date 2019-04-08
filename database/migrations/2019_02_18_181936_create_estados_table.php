<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('estados')) {
        Schema::create('estados', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idEstados');
            $table->text('tipo')->nullable();
            $table->decimal('potencia')->nullable();
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
        Schema::dropIfExists('estados');
    }
}
