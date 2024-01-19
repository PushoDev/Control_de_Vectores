<?php

namespace App\Controllers;

class Home extends BaseController
{
    #Inicio
    public function index(): string
    {
        return view('login');
    }
    
    #Inventario Resumen de todo lo que pide
    public function inventario()
    {
        
    }
}
