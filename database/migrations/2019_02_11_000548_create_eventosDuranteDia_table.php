<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosdurantediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('eventosDuranteDia')) {
            Schema::create('eventosDuranteDia', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->increments('ideventosDuranteDia');
                $table->decimal('potencia')->nullable();
                $table->string('estado', 45)->nullable();
                $table->dateTime('fEvento')->nullable();
                $table->dateTime('fVisita')->nullable();
                $table->dateTime('fPosSolucion')->nullable();
                $table->dateTime('fReporte')->nullable();
                $table->dateTime('fDiagnostico')->nullable();
                $table->dateTime('fConfirmado')->nullable();
                $table->dateTime('fVisita2')->nullable();
                $table->dateTime('fSolucion')->nullable();
                $table->integer('horas')->nullable();
                $table->text('sistema')->nullable();
                $table->text('subSistema')->nullable();
                $table->text('parte')->nullable();
                $table->text('fallo')->nullable();
                $table->text('diagnosticoPreliminar')->nullable();
                $table->text('diagnostico')->nullable();
                $table->string('responsable', 45)->nullable();
                $table->string('insertadoPor', 45)->nullable();
                $table->integer('piezas')->nullable();
                $table->string('reportadoA', 45)->nullable();
                $table->integer('numReporte')->nullable();
                $table->string('equipoAuxiliar', 45)->nullable();
                $table->string('garantia', 45)->nullable();
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
        Schema::dropIfExists('eventosDuranteDia');
    }
}
