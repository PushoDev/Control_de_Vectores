<?php

namespace App\Models;

use CodeIgniter\Model;

class TUsuarios extends Model
{
    // Nombre de la tabla
    protected $table = 't_usuarios';
    // clave primaria'de esta tabla
    protected $primaryKey = 'id_usuario';

    protected $allowedFields = ['nombre', 'apellidos', 'cargo', 'e_mail', 'usuario', 'password', 'type_usuario'];

    // Obtener Datos del Usuario
    public function obtenerUsuario($data)
    {

        $usuario = $this->db->table('t_usuarios');
        $usuario ->where($data);
        return $usuario->get()->getResultArray();

    }

    
}
