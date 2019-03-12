<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('empresa')) {
            Schema::create('empresa', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->increments('idempresa');
                $table->string('nombre', 45)->nullable();
                $table->decimal('pot_disponibleEmp')->nullable();
                $table->decimal('potIndispXMttoEmp')->nullable();
                $table->decimal('potIndispXAveriaEmp')->nullable();
                $table->decimal('pot_TotalEmp')->nullable();
                $table->integer('idtelemecanica')->unsigned();

                $table->index(["idtelemecanica"], 'fk_empresa_telemecanica1_idx');


                $table->foreign('idtelemecanica', 'fk_empresa_telemecanica1_idx')
                    ->references('idtelemecanica')->on('telemecanica')
                    ->onDelete('no action')
                    ->onUpdate('no action');
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
        Schema::dropIfExists('empresa');
    }
}
