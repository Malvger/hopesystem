<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAoGradosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ao_grados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('Estudiante')->nullable();
            $table->integer('Grado')->nullable();
            $table->integer('Ano')->nullable();
            
            $table->timestamps();
            $table->index(array('Estudiante', 'Grado','Ano'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ao_grados');
    }
}
