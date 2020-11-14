<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstudioSocioeconimico extends Model
{
    //


protected $table = 'estudio_socioeconimicos';
    protected $fillable = [
        'Apellidos',
        'Nombres',
        'Sexo',
        'Edad',
        'CUI',
        'ComunidadEtnica',
        'EstadoS',
        'IdiomaMaterno',
        'SugundoIdioma',
        'NoTelefono',
        'Proficion',
        'Empleo',
        'IngresoM',
        'Egresos',
        'DireccionD',
        'problemasSalud',
        'Especifique',
        'Especifice01',
        'NombreApellido',
        'NombreApellido02',
        'DiscapacidadSi',
        'Mayor',
        'Espesifique02',
        'CertificadoSi',
        'Motivo',
        'OtroDiscapacidadSi',
        'PropiaSi',
        'CedidaSi',
        'PrestadaSi',
        'PropiaS',
        'AlquiladaSi',
        'InvasionSi',
        'Otros',
        'Habitaciones',
        'Comedor',
        'Cocina',
        'Lavanderia',
        'PatioSi',
        'SalaSi',
        'BanoSi',
        'GarajeSi',
        'Block',
        'Adobe',
        'Madera',
        'ViviendaT',
        'AguaP',
        'Rio',
        'Pozo',
        'Otro',
        'Electricidad',
        'Velas',
        'Otros03',
        'Otros04',
        'NoT',
        'Drenaje',
        'PozoS',
        'Rio02',
        'Otro02',
        'Electricista02',
        'Lena',
        'Gas',
        'Otro03',
        'Telefono02',
        'Cable',
        'Internet',
        'Celular'

    ];
}
