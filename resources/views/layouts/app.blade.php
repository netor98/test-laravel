<!DOCTYPE html>
<html lang="en">
@php
    $meses = array(
    "enero", "febrero", "marzo", "abril", "mayo", "junio",
    "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"
);
@endphp
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devstagram - @yield('titulo')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <header class="bg-white p-5 border-b shadow">
        <div class="container mx-auto flex justify-between items-center">

            <a href="/" class="text-3xl font-black">Devstagram</a>

            @guest     
                <nav class="flex gap-4 items-center">
                    <a href="/login" class="uppercase font-bold text-gray-500">Login</a>
                    <a href="{{ route("register")}}" class="uppercase font-bold text-gray-500">Crear cuenta</a>
                </nav>
            @endguest

            @auth
              
                <nav class="flex gap-4 items-center">
                    <a href="/{{ auth()->user()->username }}" class="font-bold text-gray-500">Hola:
                        <span class="font-normal">
                            {{ auth()->user()->username }}</a>
                        </span>
                    <a href="{{ route("logout")}}" class="uppercase font-bold text-gray-500">Cerrar sesión</a>
                </nav>
            @endauth
                
        </div>
    </header>

    <main class="mx-auto container mt-10">
        <h2 class="text-center font-black text-3xl mb-10">
            @yield('titulo')
        </h2>
        @yield('contenido')
    </main>


    <footer class="text-center p-5 text-gray-500 uppercase font-bold mt-10">
        Devstagram - Todos los derechos reservados,
        
        {{now()->day}}
        de
        {{$meses[now()->month - 1]}}
        del
        {{now()->year}}

    </footer>

    
</body>

</html>