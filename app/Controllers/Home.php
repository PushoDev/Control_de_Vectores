<?php

namespace App\Controllers;

// Importar Modelos para trabajo con DataBase
// Usuarios
use App\Models\TUsuarios;

class Home extends BaseController
{
    #Salir del Proyecto
    public function logout()
    {
        // Destruir y salir de la sesión
        $session = session();
        $session->destroy();
 
        // Redirigir al formulario de inicio de sesión o sea al login
        return redirect()->to('/');
    }

    #Inicio
    public function index(): string
    {
        $mensaje = session('mensaje');
        return view('login', ["mensaje" => $mensaje]);
    }

    // Procesar datos en el Login
    public function login()
    {
        // Obtener datos del formulario
        $usuario = $this->request->getPost('usuario');
        $password = $this->request->getPost('password');

        // Validar las credenciales
        $Usuario = new TUsuarios();

        $datosUsuario = $Usuario->obtenerUsuario(['usuario' => $usuario]);
        
        // Condicion en caso de obtaner datos correctos
        if (count($datosUsuario) > 0 && password_verify("$password", $datosUsuario[0]['password'])) {

            // Iniciar sesión
            $session = session();
            $session->set([
                "id" => $datosUsuario[0]['id_usuario'],
                "nombre" => $datosUsuario[0]['nombre'],
                "username" => $datosUsuario[0]['usuario'],
                "rol" => $datosUsuario[0]['type_usuario'],
            ]);
            
            // Redirigir a la pantalla de administración
            return redirect()->to(base_url('/inventario/home'));
        } 
        else 
        {
            // Credenciales incorrectas, mostrar mensaje de error
            return redirect()->to(base_url('/'))->with('mensaje', '0');
        }        
    }

   
    
    #Inventario Resumen de todo lo que pide
    public function resumen_general()
    {
        // Verficar usuarios auth
        $session = session();
        if (!$session ->has('id')) {
            return redirect() ->to('/');
        }

        // Pantalla del Resumen Gral del Proyecto
        return view('inventario/home');
    }
}
