<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olá usando variáveis</title>
</head>
<body>
    <h1>Olá {{ $nome_cliente }} {{ $sobrenome_cliente }} seja bem vindo(a)!</h1>

    <ul>
        @foreach($lista as $link)
            <li>{{ $link }}</li>
        @endforeach
    </ul>
</body>
</html>