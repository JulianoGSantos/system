<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<header>
    <div>HOME</div>
</header>
<body>
    <a href=" {{route ('index.client') }}">Cliente</a>
    <a href=" {{route ('index.employee') }}">Colaborador</a>
</body>
<footer>
    <a href=" {{ route('search') }}">Busca</a>
</footer>
</html>