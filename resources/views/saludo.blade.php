<!DOCTYPE html>

<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Saludo</title>
<style>
body {
font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
display: grid;
place-items: center;
min-height: 100vh;
margin: 0;
background-color: #f3f4f6;
}
.container {
padding: 2rem;
background-color: white;
border-radius: 0.5rem;
box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
text-align: center;
}
h1 {
color: #1f2937;
font-weight: 600;
}
h1 span {
color: #4f46e5; /* Un color de acento */
}
</style>
</head>
<body>
<div class="container">
{{--
La sintaxis {{ $variable }} es la forma de Blade de imprimir
una variable de PHP de forma segura (evitando ataques XSS).
--}}
<h1>Hola, <span>{{ $nombre }}</span></h1>
</div>
</body>
</html>