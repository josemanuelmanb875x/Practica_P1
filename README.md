Proyecto Práctica 1: Fundamentos de Laravel (Rutas y Vistas)

📋 Descripción del Proyecto

Este es un proyecto académico para la Asignación 1, enfocado en los fundamentos de Laravel. Demuestra la implementación de rutas estáticas y dinámicas, el uso de un controlador para manejar la lógica, y la personalización de vistas Blade con CSS moderno.

🎯 Objetivo del Proyecto

Aprender y aplicar los conceptos fundamentales de Laravel:

Definir rutas estáticas (/bienvenida) y dinámicas (/saludo/{nombre}).

Crear un controlador (PaginaController) para manejar la lógica de negocio.

Pasar datos (nombre, longitud, fecha, hora) desde el controlador a la vista.

Utilizar vistas Blade para presentar la información con un diseño personalizado.

✨ Características Principales

1. Ruta Estática de Bienvenida (/bienvenida)

Página de bienvenida con un diseño personalizado.

Tema oscuro (fondo negro #111111) con acentos de color azul (#007bff).

Botón (CTA) que enlaza a la ruta dinámica de saludo.

2. Ruta Dinámica de Saludo (/saludo/{nombre})

Captura el parámetro {nombre} de la URL y lo muestra en un saludo personalizado.

Tarjetas de Información Dinámica: El controlador calcula y muestra:

El total de caracteres en el nombre.

La hora actual de la visita.

La fecha actual.

Configuración de Zona Horaria: El proyecto está configurado en config/app.php a America/Mexico_City para asegurar que la fecha y hora sean correctas.

🛠️ Tecnologías Utilizadas

Framework: Laravel

Lenguaje: PHP 8.2+

Frontend: Vistas Blade con CSS3 personalizado (Flexbox, Grid, Animaciones).

Fuente: Google Fonts (Inter).

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

🔧 Desarrollo y Código

Extractos clave del código que hacen funcionar el proyecto.

1. Estructura del Controlador (PaginaController.php)

El controlador maneja la lógica para ambas rutas y pasa los datos a la vista de saludo.

<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function mostrarBienvenida()
    {
        // Retorna la vista estática
        return view('bienvenida');
    }

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

Se definen las dos rutas principales, enlazando cada una a su método correspondiente en el PaginaController.

<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;

// 1. Ruta Estática de Bienvenida
Route::get('/bienvenida', [PaginaController::class, 'mostrarBienvenida']);

// 2. Ruta Dinámica de Saludo
Route::get('/saludo/{nombre}', [PaginaController::class, 'mostrarSaludo']);


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

Ruta Estática (/bienvenida)

![alt text](image.png)

Ruta Dinámica (/saludo/TuNombre)

![alt text](image-1.png)

✍️ Autor

Jose Manuel

Repositorio: josemanuelmanb875x/Practica_P1

Proyecto para la Asignación 1 del curso de Laravel.