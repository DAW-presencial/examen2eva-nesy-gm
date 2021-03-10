<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCenDocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cen_docentes', function (Blueprint $table) {
            $table->id();
            $table->string('denominacion', 12);
            $table->string('codigo', 12);
            $table->string('cif', 12);
            $table->string('titularidad')->default('publica')->nullable();
            $table->string('dir_postal')->nullable();
            $table->string('cp')->nullable();
            $table->string('nombre_director', 15);
            $table->string('apellido1_director', 15);
            $table->string('apellido2_director', 15)->nullable();
            $table->string('identificador', 15);
            $table->string('tipo_identificador')->enum('dni', 'nie','pasaporte','sin espefificar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cen_docentes');
    }
}
