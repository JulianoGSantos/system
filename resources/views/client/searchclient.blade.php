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
            {{ $client->cpf}}</div> <td><a href=" {{ route('show.client', $client->id) }}">detalhes </a></td><td><a href=" {{ route('edit.client', $client->id) }}"> editar</a></td>
        </tr>
    @endforeach
</body>
<footer>
    <div><a href="{{ route('start') }}">homepage</a></div>
</footer>
</html>