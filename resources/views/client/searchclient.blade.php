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
        <div class="mt-2">PACIENTES</div>
        @foreach ($clients as $client)
                <div class="grid grid-cols-2 divide-y divide-slate-400 ">
                    <div class="mt-4 mb-2 text-xl">
                        {{ $client->name}}
                    </div> 
                    <div class="mt-5 mb-5 font-semibold">
                        <a href=" {{ route('show.client', $client->id) }} ">detalhes |</a> <a href=" {{ route('edit.client', $client->id) }} "> editar</a>
                    </div>
                </div>
        @endforeach
    </body>
@endsection
@section('footer')
    <footer>
        <div class="text-center text-blue-600"><a href="javascript:history.back()">voltar</a></div>
        <div class="text-center text-blue-600"><a href="{{ route('start') }}">página inicial</a></div>
    </footer>
@endsection
</html>