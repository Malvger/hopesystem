<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiantes1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes1s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('PrimerNombre');
            $table->string('SegundoNombre');
            $table->string('ApellidoPaterno');
            $table->string('ApellidoMaterno');
            $table->string('Sexo');
            $table->integer('Edad');
            $table->string('CUI');
            $table->string('ComunidadEtnica');
            $table->string('LugarNacimiento');
            $table->date('FechaNacimiento');
            $table->string('IdiomaMaterno');
            $table->string('SugundoIdioma');

            $table->string('NombreApellidoMadre');
            $table->string('NombreApellidoPadre');
            $table->string('DPIMadre');
            $table->string('TelMadre');
            $table->string('DPIPadre');
            $table->string('TelPadre');
            $table->string('NombreApellidoEncargado');
            $table->string('DPIMadreEncargado');
            $table->string('TelMadreEncargado');
            $table->string('DireccionDomicilioEstudiante');
            
            $table->string('EstablecimientoProviene');
            $table->string('GradoIngresar');
            $table->boolean('RepitenteSi');
            $table->boolean('RepitenteNo');
            $table->integer('Noveces');

            /** SALUD FÍSICA Y PSICOLÓGICA */
            $table->string('ProbSaludEstudiante');
            $table->string('ProbSaludHogar');
            $table->string('NombProbSaludHogar');
            
            $table->string('DiscEstudiante');
            $table->string('CertificadoDiscapacidad');
            $table->string('DiscFamilia');

            $table->mediumText('Observaciones');

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
        Schema::dropIfExists('estudiantes1s');
    }
}
