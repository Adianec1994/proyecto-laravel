<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePotdispxtecnologiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('potDispXTecnologia')) {
            Schema::create('potDispXTecnologia', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->increments('idpotDispTecnologia');
                $table->decimal('potInstaladaMW')->nullable();
                $table->decimal('potInstalGrupos')->nullable();
                $table->decimal('averiasMW')->nullable();
                $table->decimal('averiasGrupos')->nullable();
                $table->decimal('averiasX100')->nullable();
                $table->decimal('mttoMW')->nullable();
                $table->decimal('mttoGrupos')->nullable();
                $table->decimal('mttoX100')->nullable();
                $table->decimal('dispDiaPlanX100')->nullable();
                $table->decimal('dispDiaRealX100')->nullable();
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
        Schema::dropIfExists('potDispXTecnologia');
    }
}
