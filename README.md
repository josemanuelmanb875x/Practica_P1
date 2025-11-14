Proyecto Práctica 1: Fundamentos de Laravel (Rutas y Vistas)

<p align="center">
<a href="https://laravel.com" target="_blank">
<!-- CORREGIDO: Enlace directo al logo (sin el https://www.google.com/url?sa=E&source=gmail&q=google.com) -->
<img src="https://www.google.com/search?q=https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%2520SVG/2%2520Color/laravel-logo-lockup-cmyk-red.svg" width="400" alt="Laravel Logo">
</a>
</p>

<p align="center">
<!-- CORREGIDO: Enlace directo al badge (sin el https://www.google.com/url?sa=E&source=gmail&q=google.com) -->
<a href="https://www.google.com/search?q=https://github.com/josemanuelmanb875x/Practica_P1/actions"><img src="https://www.google.com/search?q=https://github.com/josemanuelmanb875x/Practica_P1/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

📋 Descripción del Proyecto

Este es un proyecto académico para la Asignación 1, enfocado en los fundamentos de Laravel. Demuestra la implementación de rutas estáticas y dinámicas, el uso de un controlador para manejar la lógica, y la personalización de vistas Blade con CSS moderno (fondo oscuro y acentos en azul).

🎯 Objetivo del Proyecto

Aprender y aplicar los conceptos fundamentales de Laravel:

[✅] Definir rutas estáticas (/bienvenida) y dinámicas (/saludo/{nombre}).

[✅] Crear un controlador (PaginaController) para manejar la lógica de negocio.

[✅] Pasar datos (nombre, longitud, fecha, hora) desde el controlador a la vista.

[✅] Utilizar vistas Blade para presentar la información con un diseño personalizado.

[✅] Configurar la zona horaria de la aplicación (America/Mexico_City).

✨ Características Implementadas

1. Ruta Estática de Bienvenida (/bienvenida)

Página de bienvenida con un diseño personalizado.

Tema oscuro (fondo negro #111111) con acentos de color azul (#007bff).

Botón (CTA) que enlaza a la ruta dinámica de saludo.

2. Ruta Dinámica de Saludo (/saludo/{nombre})

Captura el parámetro {nombre} de la URL y lo muestra en un saludo personalizado.

Tarjetas de Información Dinámica: El controlador calcula y muestra:

[✅] El total de caracteres en el nombre.

[✅] La hora actual de la visita.

[✅] La fecha actual.

🛠️ Tecnologías Utilizadas

Framework: Laravel

Lenguaje: PHP 8.2+

Frontend: Vistas Blade con CSS3 personalizado (Flexbox, Grid, Animaciones).

Fuente: Google Fonts (Inter).

📂 Estructura del Código

Extractos clave del código que hacen funcionar el proyecto.

1. Controlador (app/Http/Controllers/PaginaController.php)

Maneja la lógica para ambas rutas y pasa los datos a la vista de saludo.

<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PaginaController extends Controller
{
    /**
     * Método para la ruta estática /bienvenida.
     */
    public function mostrarBienvenida()
    {
        // Retorna la vista estática
        return view('bienvenida');
    }

    /**
     * Método para la ruta dinámica /saludo/{nombre}.
     */
    // CORREGIDO: Se eliminó el "public" duplicado que tenías
    public function mostrarSaludo($nombre)
    {
        // 1. Calcula la longitud del nombre
        $longitud = mb_strlen($nombre);

        // 2. Obtiene fecha y hora (configuradas a 'America/Mexico_City')
        $fecha = now()->format('d/m/Y');
        $hora = now()->format('H:i');

        // 3. Pasa todas las variables a la vista
        return view('saludo', compact('nombre', 'longitud', 'fecha', 'hora'));
    }
}


2. Definición de Rutas (routes/web.php)

Define las dos rutas principales, enlazando cada una a su método correspondiente en el PaginaController.

<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;

// 1. Ruta Estática de Bienvenida
Route::get('/bienvenida', [PaginaController::class, 'mostrarBienvenida']);

// 2. Ruta Dinámica de Saludo
Route::get('/saludo/{nombre}', [PaginaController::class, 'mostrarSaludo']);

// Ruta raíz (opcional, redirige a bienvenida)
Route::get('/', function () {
    return redirect('/bienvenida');
});


🚀 Instalación y Configuración

Puedes ejecutar este proyecto localmente siguiendo estos pasos:

Clonar el repositorio:

git clone [https://github.com/josemanuelmanb875x/Practica_P1.git](https://github.com/josemanuelmanb875x/Practica_P1.git)


Navegar a la carpeta del proyecto:

cd practica_p1


Instalar las dependencias de Composer:

composer install


Copiar el archivo de entorno:

cp .env.example .env


Generar la llave de la aplicación:

php artisan key:generate


Iniciar el servidor de desarrollo:

php artisan serve


Abrir en el navegador:
http://127.0.0.1:8000/bienvenida

🌐 Rutas Disponibles

URL

Tipo

Descripción

/bienvenida

Estática

Muestra la página de bienvenida personalizada.

/saludo/{nombre}

Dinámica

Muestra un saludo personalizado e información (ej. /saludo/Carlos).

📸 Capturas de Pantalla

¡Aquí están las capturas de pantalla de la aplicación funcionando!

Ruta Estática (/bienvenida)

Ruta Dinámica (/saludo)

✍️ Autor

Jose Manuel

Repositorio: josemanuelmanb875x/Practica_P1

Proyecto para la Asignación 1 del curso de Laravel.

📄 Licencia

Este proyecto es de código abierto y está licenciado bajo la MIT license.

🌟 Acerca de Laravel

Laravel es un framework de aplicaciones web con una sintaxis expresiva y elegante. Creemos que el desarrollo debe ser una experiencia agradable y creativa para ser verdaderamente gratificante. Laravel intenta facilitar las tareas comunes utilizadas en la mayoría de los proyectos web.