<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clientes</title>
</head>
<body>
    @foreach ($clients as $client)
        <tr>
            <div>{{ $client->name}}
            {{ $client->cpf}}</div>
        </tr>
    @endforeach
</body>
</html>