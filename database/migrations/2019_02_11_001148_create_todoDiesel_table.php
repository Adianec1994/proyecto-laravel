<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTododieselTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('todoDiesel')) {
            Schema::create('todoDiesel', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->increments('idtodoDiesel');
                $table->decimal('genBruta')->nullable();
                $table->decimal('insumos')->nullable();
                $table->decimal('recibido')->nullable();
                $table->decimal('volumenRecibido')->nullable();
                $table->decimal('consumoGeneracion')->nullable();
                $table->decimal('densidadPonderada')->nullable();
                $table->decimal('temperatura')->nullable();
                $table->decimal('densidadCorreccion')->nullable();
                $table->decimal('valorCalorico')->nullable();
                $table->decimal('existencia')->nullable();
                $table->decimal('cobertura')->nullable();
                $table->decimal('ceb')->nullable();
                $table->decimal('recibido2')->nullable();
                $table->decimal('consumoReposicion')->nullable();
                $table->decimal('consumoCambio')->nullable();
                $table->decimal('consumoTotal')->nullable();
                $table->decimal('existencia2')->nullable();
                $table->dateTime('cob')->nullable();
                $table->decimal('ceb2')->nullable();
                $table->decimal('recibido3')->nullable();
                $table->decimal('consumo')->nullable();
                $table->decimal('existencia3')->nullable();
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
        Schema::dropIfExists('todo_diesels');
    }
}
