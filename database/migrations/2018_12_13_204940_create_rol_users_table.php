<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('rol_users')) {
            Schema::create('rol_users', function (Blueprint $table) {
                $table->increments('id');
                $table->string('nombre');
                $table->boolean('usuarios')->default(false);
                $table->boolean('registros')->default(false);
                $table->boolean('operaciones')->default(false);
                $table->boolean('reportes')->default(false);
                $table->boolean('graficos')->default(false);
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
        Schema::dropIfExists('rol_users');
    }
}
