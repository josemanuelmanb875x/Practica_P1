<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo Personalizado</title>
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
            overflow-y: auto; /* Permitir scroll si el contenido es mucho */
            position: relative;
            padding: 2rem 0; /* Añadir padding por si el contenido es grande */
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
            color: #e0f2f7; /* Texto claro */
            font-weight: 800;
            font-size: 2.8em;
            margin-bottom: 0.5em;
        }
        h1 span {
            color: #007bff; /* Nombre en azul */
            /* Sombra de texto cambiada a azul */
            text-shadow: 0 0 10px rgba(0, 123, 255, 0.4);
        }
        p {
            font-size: 1.2em;
            line-height: 1.6;
            margin-bottom: 2em;
            color: #a0aec0;
        }

        /* --- INICIO: NUEVOS ESTILOS PARA TARJETAS --- */

        .info-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
            margin-top: 2.5rem;
            margin-bottom: 2.5rem;
        }

        .info-card {
            background-color: rgba(0, 123, 255, 0.05);
            padding: 1.5rem;
            border-radius: 1rem;
            border: 1px solid rgba(0, 123, 255, 0.2);
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .info-card:hover {
            transform: translateY(-5px);
            background-color: rgba(0, 123, 255, 0.1);
        }

        .card-icon {
            font-size: 2rem;
            margin-bottom: 0.5rem;
            line-height: 1;
        }

        .card-value {
            font-size: 2.2rem;
            font-weight: 800;
            color: #007bff; /* Azul */
        }

        .card-label {
            font-size: 0.9rem;
            color: #a0aec0;
            margin-top: 0.25rem;
        }

        /* --- FIN: NUEVOS ESTILOS PARA TARJETAS --- */

        .cta-button {
            display: inline-block;
            background-color: #007bff; /* Botón en azul */
            color: #ffffff; /* Texto del botón en blanco */
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

        /* --- INICIO: ESTILO RESPONSIVO PARA TARJETAS --- */
        @media (max-width: 640px) {
            .container {
                padding: 2rem;
            }
            .info-grid {
                grid-template-columns: 1fr; /* Apila las tarjetas verticalmente */
                gap: 1rem;
            }
            h1 {
                font-size: 2.2em;
            }
            .card-value {
                font-size: 1.8rem;
            }
        }
        /* --- FIN: ESTILO RESPONSIVO PARA TARJETAS --- */

    </style>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>¡Hola, <span>{{ $nombre }}</span>!</h1>
        <p>Es un placer tenerte aquí. Esta es una demostración de cómo Laravel maneja rutas dinámicas con parámetros personalizados.</p>

        <!-- --- INICIO: HTML PARA TARJETAS --- -->
        <div class="info-grid">
            <div class="info-card">
                <div class="card-icon">📍</div>
                <div class="card-value">{{ $longitud }}</div>
                <div class="card-label">Caracteres</div>
            </div>
            <div class="info-card">
                <div class="card-icon">⏱️</div>
                <div class="card-value">{{ $hora }}</div>
                <div class="card-label">Hora de visita</div>
            </div>
            <div class="info-card">
                <div class="card-icon">🗓️</div>
                <div class="card-value">{{ $fecha }}</div>
                <div class="card-label">Fecha de hoy</div>
            </div>
        </div>
        <!-- --- FIN: HTML PARA TARJETAS --- -->

        <a href="/bienvenida" class="cta-button">Volver a Bienvenida</a>
    </div>
</body>
</html>