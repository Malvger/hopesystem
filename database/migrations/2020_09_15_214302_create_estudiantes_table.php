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
            $table->integer('Area')->nullable();
            $table->string('PrimerNombre');
            $table->string('SegundoNombre')->nullable();
            $table->string('ApellidoPaterno');
            $table->string('ApellidoMaterno')->nullable();
            $table->string('Sexo');
            $table->integer('Edad');
            $table->string('CUI')->unique();
            $table->string('ComunidadEtnica')->nullable();
            $table->string('LugarNacimiento')->nullable();
            $table->date('FechaNacimiento')->nullable();
            $table->string('IdiomaMaterno')->nullable();
            $table->string('SugundoIdioma')->nullable();

            $table->string('NombreApellidoMadre')->nullable();
            $table->string('NombreApellidoPadre')->nullable();
            $table->string('DPIMadre')->nullable();
            $table->string('TelMadre')->nullable();
            $table->string('DPIPadre')->nullable();
            $table->string('TelPadre')->nullable();
            $table->string('NombreApellidoEncargado')->nullable();
            $table->string('DPIMadreEncargado')->nullable();
            $table->string('TelMadreEncargado')->nullable();
            $table->string('DireccionDomicilioEstudiante')->nullable();
            
            $table->string('EstablecimientoProviene')->nullable();
            $table->string('GradoIngresar')->nullable();
            $table->boolean('RepitenteSi')->nullable();
            $table->boolean('RepitenteNo')->nullable();
            $table->integer('Noveces')->nullable();

            /** SALUD FÍSICA Y PSICOLÓGICA */
            $table->string('ProbSaludEstudiante')->nullable();
            $table->string('ProbSaludHogar')->nullable();
            $table->string('NombProbSaludHogar')->nullable();
            
            $table->string('DiscEstudiante')->nullable();
            $table->string('CertificadoDiscapacidad')->nullable();
            $table->string('DiscFamilia')->nullable();
            
            /** Dinaminca familiar  */
            $table->boolean('ProblemaFamiliarSi')->nullable();
            $table->string('Explique')->nullable();
            $table->boolean('PadresSeparadosSi')->nullable();
            $table->boolean('DPISi')->nullable();
            $table->string('Razones')->nullable();
            $table->string('RazonesPorque')->nullable();
            $table->boolean('CertificadoRENAP')->nullable();
            $table->boolean('DPIPapa')->nullable();
            $table->boolean('vacunacion')->nullable();
            $table->boolean('DPIMama')->nullable();
            $table->boolean('codigopersonalSi')->nullable();
            $table->boolean('buenaConductaSi')->nullable();
            $table->boolean('diplomapre')->nullable();
            $table->boolean('certificadoOriginal')->nullable();

            //** Observaciones  */

            $table->mediumText('Observaciones')->nullable();

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
