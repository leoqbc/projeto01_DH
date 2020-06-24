<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nossa primeira View!</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    
    <ul>
        <li>
            <a href="{{ route('home') }}">Home</a>
        </li>
        <li>
            <a href="{{ route('ola', ['João', 'Carvalho']) }}">Ola</a>
        </li>
        <li>
            <a href="{{ route('contato') }}">Contato</a>
        </li>
    </ul>

    <h1>Projeto 01</h1>
    <p>Um página usando o frameworl Laravel</p>

    <h3>Seja bem vindo(a) ao Site</h3>
    <p>Mais um texto aqui, tra la la la la</p>
</body>
</html>