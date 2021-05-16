<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoSalidaPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salida_tipo_salida', function (Blueprint $table) {
            $table->foreignId('tipo_salida_id')->references('id')->on('tipo_salidas')->cascadeOnDelete();
            $table->foreignId('salida_id')->references('id')->on('salidas')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salida_tipo_salida');
    }
}
