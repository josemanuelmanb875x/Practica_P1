<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #111111; /* Fondo más oscuro */
            color: #e0f2f7; /* Texto claro */
            overflow: hidden;
            position: relative;
        }
        body::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            /* Cambiado a resplandor azul */
            background: radial-gradient(circle at 60% 30%, rgba(0, 123, 255, 0.1) 0%, transparent 40%),
                        radial-gradient(circle at 20% 80%, rgba(0, 80, 200, 0.1) 0%, transparent 40%);
            animation: backgroundPan 30s infinite alternate;
            opacity: 0.7;
            z-index: 0;
        }

        @keyframes backgroundPan {
            0% { transform: translate(0%, 0%); }
            100% { transform: translate(-20%, -20%); }
        }

        .container {
            z-index: 1;
            padding: 3rem;
            background-color: rgba(33, 33, 33, 0.85); /* Fondo del contenedor semitransparente oscuro */
            border-radius: 1.5rem;
            /* Borde y sombra cambiados a azul */
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3), 0 0 0 1px rgba(0, 123, 255, 0.2);
            text-align: center;
            max-width: 600px;
            width: 90%;
            animation: fadeIn 1s ease-out;
            position: relative;
            overflow: hidden;
        }
        .container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            /* Gradiente de fondo cambiado a azul */
            background: linear-gradient(45deg, rgba(0, 123, 255, 0.05) 0%, rgba(0,123,255,0) 50%, rgba(0,123,255,0.05) 100%);
            z-index: -1;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h1 {
            color: #007bff; /* Título en azul */
            font-weight: 800;
            font-size: 2.8em;
            margin-bottom: 0.5em;
            /* Sombra de texto cambiada a azul */
            text-shadow: 0 0 10px rgba(0, 123, 255, 0.4);
        }
        p {
            font-size: 1.2em;
            line-height: 1.6;
            margin-bottom: 2em;
            color: #a0aec0;
        }
        .cta-button {
            display: inline-block;
            background-color: #007bff; /* Botón en azul */
            color: #ffffff; /* Texto del botón en blanco para mejor contraste */
            padding: 0.8em 2em;
            border-radius: 0.75rem;
            text-decoration: none;
            font-weight: 700;
            font-size: 1.1em;
            transition: background-color 0.3s ease, transform 0.2s ease, box-shadow 0.3s ease;
            /* Sombra de botón cambiada a azul */
            box-shadow: 0 5px 15px rgba(0, 123, 255, 0.3);
        }
        .cta-button:hover {
            background-color: #0056b3; /* Azul más oscuro al pasar el ratón */
            transform: translateY(-3px);
            /* Sombra de hover cambiada a azul */
            box-shadow: 0 8px 20px rgba(0, 123, 255, 0.4);
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>¡Bienvenido a Laravel!</h1>
        <p>Tu viaje en el desarrollo web moderno comienza aquí.</p>
        <p>Esta es una aplicación construida con Laravel, el framework PHP más elegante y expresivo. Explora las diferentes funcionalidades y descubre el poder de las rutas dinámicas.</p>
        <a href="/saludo/TuNombre" class="cta-button">Ver Ruta Dinámica</a>
    </div>
</body>
</html>