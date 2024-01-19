<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsuariosTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'         => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => true,
            ],
            'nombre'     => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'apellidos'  => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'username'   => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'correo'     => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'contrasena' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'rol'        => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('usuarios');
    }

    public function down()
    {
        $this->forge->dropTable('usuarios');
    }
}
