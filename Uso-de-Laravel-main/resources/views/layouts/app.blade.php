<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')

    <title>@yield('contenido')</title>

</head>

<body>
    <div class="flex-row font-sans">
        <h1 class="text-3xl font-bold underline text-blue-700">@yield('nombre')</h1>
        <h3>Hola Mundo</h3>
        <nav>
            <ul>
                <li><a href={{ route('home') }}>Principal</a></li>
                <li><a href={{ route('nosotros') }}>Nosotros</a></li>
                <li><a href={{ route('ventas') }}>Venta Laptops</a></li>
                <li><a href={{ route('contactos') }}>Puedes contactarnos en:</a></li>
            </ul>
        </nav>
        <h4>@yield('contenido')</h4>
        <h1>Directiva If</h1>
        <p>@yield('informacion')</p>
        <h1>Directiva Switch</h1>
        <p>@yield('swicth')</p>
        <h1>Directiva For</h1>
        <p>@yield('for')</p>
        <h1>Directiva While</h1>
        <p>@yield('while')</p>
        <h1>Directiva For Each</h1>
        <p>@yield('each')</p>
        <h1>Directiva For Else</h1>
        <p>@yield('else')</p>
        <h1>Practica Factorial</h1>
        <p>@yield('factorial')</p>

    </div>

</body>

</html>
