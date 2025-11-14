<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    /**
     * Método para la ruta estática /bienvenida.
     * Simplemente retorna la vista.
     */
    public function mostrarBienvenida()
    {
        // Esto busca el archivo 'resources/views/bienvenida.blade.php'
        return view('bienvenida');
    }

    /**
     * Método para la ruta dinámica /saludo/{nombre}.
     * Recibe el parámetro 'nombre' desde la URL.
     */
    public function mostrarSaludo($nombre)
    {
        // 'compact('nombre')' es un atajo de PHP para crear un array:
        // ['nombre' => $nombre]
        // Este array pasa la variable $nombre a la vista de Blade.
        return view('saludo', compact('nombre'));
    }
}


