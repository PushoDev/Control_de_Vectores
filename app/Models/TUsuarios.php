<?php

#Modelo para los usuarios
namespace App\Models;

use CodeIgniter\Model;

class TUsuarios extends Model
{
    // Nombre de la tabla
    protected $table = 'usuarios';
    // Clave primaria de la tabla de los usuarios
    protected $primaryKey = 'id';
    // Otras protecciones
    protected $allowFields = ['nombre', 'apellidos','username','correo','contrasena','rol'];

    // Obtener Datos del usuario
    public function obtenerUsuario($data)
    {
        $username = $this->db->table('usuarios');
        $username -> where($data);
        return $username -> get()->getResultArray();
    }
}