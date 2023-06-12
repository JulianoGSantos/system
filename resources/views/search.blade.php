<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buscar</title>
</head>
<header>
    <div>Buscar</div>
</header>
<body>
    <a href="{{ route('search.client') }}">Cliente</a>
    <a href="{{ route('search.employee') }}">Colaborador</a>
</body>
<footer>
    <div><a href="{{ route('start') }}">homepage</a></div>
</footer>
</html>