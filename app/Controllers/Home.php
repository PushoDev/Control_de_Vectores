<?php

namespace App\Controllers;

use App\Models\TUsuarios;

class Home extends BaseController
{
    
    // Página de Inicio (Login)
    public function index(): string
    {
        $mensaje = session('mensaje');
        return view('login', ["mensaje" => $mensaje]);
    }

    // Procesar datos en el Login
    // Procesar datos de inicio de sesión
    public function login()
    {
        // Obtener datos del formulario
        $usuario = $this->request->getPost('usuario');
        $password = $this->request->getPost('password');

        // Validar las credenciales
        $Usuario = new TUsuarios();

        $datosUsuario = $Usuario->obtenerUsuario(['usuario' => $usuario]);
        

        if (count($datosUsuario) > 0 && password_verify("$password", $datosUsuario[0]['password'])) {

            // Iniciar sesión
            $session = session();
            $session->set([
                "usuario_id" => $datosUsuario[0]['id_usuario'],
                "usuario_nombre" => $datosUsuario[0]['nombre'],
                "usuario" => $datosUsuario[0]['usuario'],
                "type_usuario" => $datosUsuario[0]['type_usuario'],
            ]);
            
            // Redirigir a la pantalla de administración
            return redirect()->to(base_url('/inventario/resumen_general'));
        } 
        else 
        {
            // Credenciales incorrectas, mostrar mensaje de error
            return redirect()->to(base_url('/'))->with('mensaje', '0');
        }
    }


    // Página de Resumen General
    public function resumen_general()
    {
        // Verificar usuarios auth
        $session = session();
        if (!$session->has('id_usuario')) {
            return redirect()->to('/');
        }

        // Pantalla del Resumen General del Proyecto
        return view('/inventario/home');
    }

    // Salir del Proyecto
    public function logout()
    {
        // Destruir y salir de la sesión
        $session = session();
        $session->destroy();

        // Redirigir al formulario de inicio de sesión (login)
        return redirect()->to('/');
    }
}
