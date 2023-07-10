<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pacientes</title>
    @extends('client.layouts.app')
</head>
@section('content')
    <body>
        <div>PACIENTES</div>
        @foreach ($clients as $client)
                <div class="grid grid-cols-2">
                    <div class="mt-2">
                        {{ $client->name}}
                    </div> 
                    <div class="mt-2 mb-2 font-semibold">
                        <a href=" {{ route('show.client', $client->id) }}">detalhes </a><a href=" {{ route('edit.client', $client->id) }}"> editar</a>
                    </div>
                </div>
        @endforeach
    </body>
@endsection
@section('footer')
    <footer>
        <div class="text-center text-blue-600"><a href="{{ route('start') }}">página inicial</a></div>
    </footer>
@endsection
</html>