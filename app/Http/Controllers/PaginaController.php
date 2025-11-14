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
        // 1. Calculamos la longitud del nombre.
        // Usamos mb_strlen para contar bien caracteres especiales o tildes.
        $longitud = mb_strlen($nombre);

        // 2. Obtenemos la fecha y hora actual usando el helper 'now()' de Laravel.
        // Puedes ajustar la zona horaria en config/app.php si es necesario.
        $fecha = now()->format('d/m/Y');
        $hora = now()->format('H:i'); // Formato 24 horas

        // 3. Pasamos todas las variables a la vista.
        return view('saludo', compact('nombre', 'longitud', 'fecha', 'hora'));
    }
}


