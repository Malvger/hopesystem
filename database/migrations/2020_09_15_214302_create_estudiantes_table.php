<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
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
            
            /** Dinaminca familiar  */
            $table->boolean('ProblemaFamiliarSi');
            $table->string('Explique');
            $table->boolean('PadresSeparadosSi');
            $table->boolean('DPISi');
            $table->string('Razones');
            $table->string('RazonesPorque');
            $table->boolean('CertificadoRENAP');
            $table->boolean('DPIPapa');
            $table->boolean('vacunacion');
            $table->boolean('DPIMama');
            $table->boolean('codigopersonalSi');
            $table->boolean('buenaConductaSi');
            $table->boolean('diplomapre');
            $table->boolean('certificadoOriginal');

            //** Observaciones  */

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
        Schema::dropIfExists('estudiantes');
    }
}
