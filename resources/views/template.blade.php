<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('script-css')
    <title>Postagem de artigos de técnologia da Digital House - @yield('titulo')</title>
</head>
<body>
    <nav>
        {{-- 
        @include('menu') 
        --}}
        <ul>
            <li>Home</li>
            <li>Posts</li>
            <li>Contato</li>
            <li>
                <a href="{{ route('ola', ['Leonardo', 'Tumadjian']) }}">Olá</a>
            </li>
        </ul>
    </nav>
    <h1>Blog Digital House Tecnology</h1>
    <p>Blog sobre informações de tecnologia</p>

    <main role="main">
        
        @yield('main')

    </main>

    <footer>Copyright 2020</footer>
    @yield('scripts')
</body>
</html>