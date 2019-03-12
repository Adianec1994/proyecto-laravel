<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosGeneralesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('datosGenerales')) {
            Schema::create('datosGenerales', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->increments('idDatosGenerales');
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
                $table->decimal('indiceConsumo')->nullable();
                $table->decimal('lubricteRecibido')->nullable();
                $table->decimal('lubricteCsmoReposicion')->nullable();
                $table->decimal('lubricteCsmoCambio')->nullable();
                $table->decimal('lubricteCsmoTotal')->nullable();
                $table->decimal('lubricteExistencia')->nullable();
                $table->decimal('lubricteCobertura')->nullable();
                $table->decimal('lubricteIndiceCsmo')->nullable();
                $table->decimal('refrigteRecibido')->nullable();
                $table->decimal('refrigteConsumo')->nullable();
                $table->decimal('refrigteExistencia')->nullable();
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
        Schema::dropIfExists('datosGenerales');
    }
}
