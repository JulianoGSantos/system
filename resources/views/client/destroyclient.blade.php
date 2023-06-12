<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deletar CLiente</title>
</head>
<header>
    <h1> {{ $client->name}} </h1>
</header>
<body>
    <ul>
        <li>{{$client->cpf}}</li>
        <li>{{$client->email}}</li> 
        <li>{{$client->street}}</li> 
        <li>{{$client->number}}</li>
        <li>{{$client->complement}}</li> 
        <li>{{$client->city}}</li> 
        <li>{{$client->state}}</li> 
        <li>{{$client->cep}}</li> 
        <li>{{$client->cellphone}}</li> 
        <li>{{$client->cellphone2}}</li>
    </ul>
</body>
<footer>
<a href="#"></a>
</footer>
</html>