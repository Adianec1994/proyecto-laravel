<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosdiariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('eventosDiarios')) {
            Schema::create('eventosDiarios', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->increments('idEventosDiarios');
                $table->decimal('potencia')->nullable();
                $table->text('estado')->nullable();
                $table->dateTime('fEvento')->nullable();
                $table->dateTime('fVisita')->nullable();
                $table->dateTime('fPosSolucion')->nullable();
                $table->dateTime('fReporte')->nullable();
                $table->dateTime('fDiagnostico')->nullable();
                $table->dateTime('fConfirmado')->nullable();
                $table->dateTime('fVisita2')->nullable();
                $table->dateTime('fSolucion')->nullable();
                $table->time('horas')->nullable();
                $table->text('sistema')->nullable();
                $table->text('subSistema')->nullable();
                $table->text('parte')->nullable();
                $table->text('fallo')->nullable();
                $table->text('diagnosticoPreliminar')->nullable();
                $table->text('diagnostico')->nullable();
                $table->text('responsable')->nullable();
                $table->text('insertadoPor')->nullable();
                $table->integer('piezas')->nullable();
                $table->text('reportadoA')->nullable();
                $table->integer('numReporte')->nullable();
                $table->text('equipoAuxiliar')->nullable();
                $table->text('garantia')->nullable();
                $table->integer('idProvincias')->unsigned();
                $table->integer('idGrupos')->unsigned();
                $table->timestamps();

                $table->index(["idProvincias"], 'fk_eventosDiarios_provincias1_idx');

                $table->index(["idGrupos"], 'fk_eventosDiarios_grupos1_idx');

                $table->foreign('idProvincias', 'fk_eventosDiarios_provincias1_idx')
                    ->references('idProvincias')->on('provincias')
                    ->onDelete('no action')
                    ->onUpdate('no action');

                $table->foreign('idGrupos', 'fk_eventosDiarios_grupos1_idx')
                    ->references('idGrupos')->on('grupos')
                    ->onDelete('no action')
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
        Schema::dropIfExists('eventosDiarios');
    }
}
