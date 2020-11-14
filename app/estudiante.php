<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estudiante extends Model
{
    //
    protected $table = 'estudiantes';
    protected $fillable = [
        'Area',
        'PrimerNombre',
        'SegundoNombre',
        'ApellidoPaterno',
        'ApellidoMaterno',
        'Sexo',
        'Edad',
        'CUI',
        'ComunidadEtnica',
        'LugarNacimiento',
        'FechaNacimiento',
        'IdiomaMaterno',
        'SugundoIdioma',
        'NombreApellidoMadre',
        'NombreApellidoPadre',
        'DPIMadre',
        'TelMadre',
        'DPIPadre',
        'TelPadre',
        'NombreApellidoEncargado',
        'DPIMadreEncargado',
        'TelMadreEncargado',
        'DireccionDomicilioEstudiante',     
        'EstablecimientoProviene',
        'GradoIngresar',
        'RepitenteSi',
        'RepitenteNo',
        'Noveces',
        'ProbSaludEstudiante',
        'ProbSaludHogar',
        'NombProbSaludHogar',         
        'DiscEstudiante',
        'CertificadoDiscapacidad',
        'DiscFamilia',
        'ProblemaFamiliarSi',
        'Explique',
        'PadresSeparadosSi',
        'DPISi',
        'Razones',
        'RazonesPorque',
        'CertificadoRENAP',
        'DPIPapa',
        'vacunacion',
        'DPIMama',
        'codigopersonalSi',
        'buenaConductaSi',
        'diplomapre',
        'certificadoOriginal',
        'grado'

    ];
}
