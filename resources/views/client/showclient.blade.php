<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalhes do CLiente</title>
    @extends('client.layouts.app')
</head>
@section('content')  
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
        <form action=" {{ route('destroy.client', $client->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <div class="mt-4 mb-5">
                <button type="submit" class="bg-red-700 px-4 py-1 rounded-xl text-white ring-1">Deletar</button>
            </div>
        </form>
    </body>
@endsection
    <footer>

</footer>
</html>