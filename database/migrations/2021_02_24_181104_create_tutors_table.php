<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutores', function (Blueprint $table) {
            $table->id();
            $table->string('empresa', 12);
            $table->string('documento')->enum('dni', 'nie','pasaporte','sin espefificar');
            $table->string('nombre_tutor_emp', 15);
            $table->string('apellido1_tutor_emp', 15);
            $table->string('apellido2_tutor_emp', 15)->nullable();
            $table->string('pais_documento')->nullable();
            $table->string('provincia')->nullable();
            $table->string('municipio')->nullable();
            $table->string('status')->default('activo');
            $table->string('telefono', 12)->nullable();
            $table->string('email')->nullable();
            $table->timestamps();


        });


        DB::statement("comment on table tutores is 'Según Gestib, el tutor debe vincularse a la empresa y no a un centro de trabajo'");
    }

    /**
     * Reverse the migrations.tutor_fct
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('tutores');
    }

}
