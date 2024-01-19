<?php

namespace App\Controllers;

class Home extends BaseController
{
    #Inicio
    public function index(): string
    {
        return view('login');
    }

    #Salir del Proyecto
    public function logout()
    {
        // Destruir y salir de la sesión
        $session = session();
        $session->destroy();

        // Redirigir al formulario de inicio de sesión o sea al login
        return redirect()->to('/');
    }
    
    #Inventario Resumen de todo lo que pide
    public function resumen_general()
    {
        return view('inventario/home');
    }
}
