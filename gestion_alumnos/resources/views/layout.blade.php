<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Document</title>
</head>

<body>
<div id="app">
    <header class="cabecera">
        <img src="{{asset("/imagenes/descarga.jpg")}}" alt="lOGO ENLACES">
        <h1 class="text-white text-3xl">empresa de alumnos</h1>
        @auth
            {{auth()->user()->name}}
            <form action="logout" method="post">
                @csrf
                <x-primary-button>Logout</x-primary-button>
            </form>
        @endauth
        @guest
            <form action="login" method="post">
                @csrf
                <input type="tex" name="email" placeholder="email" id="">
                <input type="tex" name="password" placeholder="password" id=""><br />
                <x-primary-button>Login</x-primary-button>
                <x-ancla class="text-5xl-red" href="register">Registrarme</x-ancla>
            </form>
        @endguest

    </header>

    <nav class="h-10v bg-red-100">
        <x-ancla href="about">About</x-ancla>
        @auth
            <x-ancla href="/alumnos">Alumnos</x-ancla>
            <x-ancla href="/empresas">Empresas</x-ancla>
        @endauth
    </nav>

    <main class="h-65v bg-red-300">
        @yield("contenido_main")
    </main>

    <footer class="15v bg-red-800">

    </footer>
</div>
</body>

</html>
