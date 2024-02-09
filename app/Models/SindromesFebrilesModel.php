<?php

// Modelo para sindromes febriles ...


namespace App\Models;

use CodeIgniter\Model;

class SindromesFebrilesModel extends Model
{
    protected $table = 'sindromes_febriles';
    protected $primaryKey = 'id_febril';
    protected $allowedFields = [
        'fecha_encuetro',
        'nombre_y_apellidos',
        'edad',
        'sexo',
        'direccion_de_residencia',
        'municipio',
        'hospital',
        'area_de_salud',
        'febriles',
        'zika',
        'remisiones',
        'ingresos',
        'no_consultorio',
    ];

    protected $useAutoIncrement = true;

    protected $validationRules = [
        'fecha_encuetro' => 'required|valid_date',
        'nombre_y_apellidos' => 'required|max_length[255]',
        'edad' => 'required|integer',
        'sexo' => 'required|in_list[Masculino,Femenino]',
        'direccion_de_residencia' => 'required|max_length[255]',
        'municipio' => 'required|max_length[255]',
        'hospital' => 'required|max_length[255]',
        'area_de_salud' => 'required|max_length[255]',
        'febriles' => 'integer',
        'zika' => 'integer',
        'remisiones' => 'integer',
        'ingresos' => 'integer',
        'no_consultorio' => 'max_length[255]',
    ];

    protected $validationMessages = [
        'fecha_encuetro' => [
            'required' => 'La fecha de encuentro es obligatoria.',
            'valid_date' => 'El formato de la fecha de encuentro no es válido.',
        ],

        // mensajes de validación para luego
        // Perfeccionar proyecto
        
    ];
}
