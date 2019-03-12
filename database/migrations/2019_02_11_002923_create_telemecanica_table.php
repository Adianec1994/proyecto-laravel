<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelemecanicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('telemecanica')) {
            Schema::create('telemecanica', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->increments('idtelemecanica');
                $table->decimal('potIndisponibleXTM')->nullable();
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
        Schema::dropIfExists('telemecanica');
    }
}
