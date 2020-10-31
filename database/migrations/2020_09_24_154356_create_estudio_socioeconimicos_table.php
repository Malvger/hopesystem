<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudioSocioeconimicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudio_socioeconimicos', function (Blueprint $table) {
            $table->bigIncrements('id');


            $table->string('Apellidos');
            $table->string('Nombres');
            $table->string('Sexo');
            $table->integer('Edad');
            $table->string('CUI')->unique();
            $table->string('ComunidadEtnica')->nullable();
            $table->string('EstadoS')->nullable();
            $table->string('IdiomaMaterno')->nullable();
            $table->string('SugundoIdioma')->nullable();
            $table->string('NoTelefono')->nullable();
            $table->string('Proficion')->nullable();
            $table->string('Empleo')->nullable();
            $table->string('IngresoM')->nullable();
            $table->string('Egresos')->nullable();
            $table->string('DireccionD')->nullable();

//salud fisica psocologica 
            $table->boolean('problemasSalud')->nullable();
            $table->string('Especifique')->nullable();
            
            $table->string('Especifice01')->nullable();
            $table->string('NombreApellido')->nullable();
            $table->string('NombreApellido02')->nullable();
            $table->boolean('DiscapacidadSi')->nullable();
            $table->boolean('Mayor')->nullable();
            $table->string('Espesifique02')->nullable();

             //
            $table->boolean('CertificadoSi')->nullable();
            $table->string('Motivo')->nullable();
            $table->boolean('OtroDiscapacidadSi')->nullable();
            $table->boolean('PropiaSi')->nullable();
            $table->boolean('CedidaSi')->nullable();
            $table->boolean('PrestadaSi')->nullable();
            $table->boolean('PropiaS')->nullable();
            $table->boolean('AlquiladaSi')->nullable();
            $table->boolean('InvasionSi')->nullable();
            $table->string('Otros')->nullable();
            $table->string('Habitaciones')->nullable();
            $table->string('Comedor')->nullable();
            $table->string('Cocina')->nullable();
            $table->string('Lavanderia')->nullable();
            $table->boolean('PatioSi')->nullable();
            $table->boolean('SalaSi')->nullable();
            $table->boolean('BanoSi')->nullable();
            $table->boolean('GarajeSi')->nullable();

            $table->boolean('Block')->nullable();
            $table->boolean('Adobe')->nullable();
            $table->boolean('Madera')->nullable();
            $table->boolean('ViviendaT')->nullable();
            $table->boolean('AguaP')->nullable();
            $table->boolean('Rio')->nullable();
            $table->boolean('Pozo')->nullable();
            $table->boolean('Otro')->nullable();
            $table->boolean('Electricidad')->nullable();
            $table->boolean('Velas')->nullable();
            $table->boolean('Otros03')->nullable();
            $table->boolean('Otros04')->nullable();
            $table->boolean('NoT')->nullable();
            $table->boolean('Drenaje')->nullable();
            $table->boolean('PozoS')->nullable();
            $table->boolean('Rio02')->nullable();
            $table->boolean('Otro02')->nullable();
            $table->boolean('Electricista02')->nullable();
            $table->boolean('Lena')->nullable();
            $table->boolean('Gas')->nullable();
            $table->boolean('Otro03')->nullable();
            $table->boolean('Telefono02')->nullable();
            $table->boolean('Cable')->nullable();
            $table->boolean('Internet')->nullable();
            $table->boolean('Celular')->nullable();




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
        Schema::dropIfExists('estudio_socioeconimicos');
    }
}
