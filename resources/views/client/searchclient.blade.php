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
        <form action=" {{ route('search.client') }}" method="GET">
            <div class="mt-5 text-xl">HISTÓRICO DE PACIENTES</div>
            <div class="grid grid-cols-2 mt-5">
                <div class="grid mr-5">
                    <input type="search" name="search" id="isearch" placeholder="   busque um paciente" style="height: 35px" class=" form-control rounded-md ring-2 p-2 opacity-60">
                </div>
                <div class="mb-5 text-2xl">
                    <button type="submit" class="bg-red-400 px-1 py-1 rounded-xl text-white text-lg ring-1">Pesquisar</button>
                </div>
            </div>
        </form>
        <hr>
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
        <div class="flex justify-center grid-cols-2">
            <div class="bg-blue-400 mt-2 mb-5 w-20 px-4 py-1 rounded-xl text-white ring-1"><a href="javascript:history.back()">voltar</a></div>
            <div class="bg-blue-400 ml-2 mt-2 mb-5 px-4 py-1 rounded-xl text-white ring-1"><a href="{{ route('start') }}">página inicial</a></div>
        </div>
    </footer>
@endsection
</html>