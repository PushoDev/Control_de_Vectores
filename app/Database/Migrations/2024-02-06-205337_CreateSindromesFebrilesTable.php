<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSindromesFebrilesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_febril' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'fecha_encuetro' => [
                'type' => 'DATE',
            ],
            'nombre_y_apellidos' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'edad' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'sexo' => [
                'type' => 'ENUM("Masculino", "Femenino")',
            ],
            'direccion_de_residencia' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'municipio' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'hospital' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'area_de_salud' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'febriles' => [
                'type' => 'INT',
                'constraint' => 11,
                'default' => 0,
            ],
            'zika' => [
                'type' => 'INT',
                'constraint' => 11,
                'default' => 0,
            ],
            'remisiones' => [
                'type' => 'INT',
                'constraint' => 11,
                'default' => 0,
            ],
            'ingresos' => [
                'type' => 'INT',
                'constraint' => 11,
                'default' => 0,
            ],
            'no_consultorio' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);

        $this->forge->addKey('id_febril', true);
        $this->forge->createTable('sindromes_febriles');
    }

    public function down()
    {
        $this->forge->dropTable('sindromes_febriles');
    }
}
