<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TUsuarios extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_usuario' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nombre' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'apellidos' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'cargo' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'e_mail' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'usuario' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '255', 
            ],
            'type_usuario' => [
                'type' => 'ENUM',
                'constraint' => ['admin', 'estadistico', 'epidemiologo'], // Definir los roles de los usuarios
                'default' => 'admin',
            ],
        ]);

        $this->forge->addKey('id_usuario', true);
        $this->forge->createTable('t_usuarios');
    }

    public function down()
    {
        $this->forge->dropTable('t_usuarios');
    }
}
