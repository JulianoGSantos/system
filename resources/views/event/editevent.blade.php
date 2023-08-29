<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Consultas</title>
    @extends('client.layouts.app')
</head>
<header>

</header>
@section('content')
    <body>
        <form action=" {{ route('update.event', $event->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <div class="mt-2">CADASTRO DE CONSULTAS</div>
            <div class="grid grid-cols-2">
                <div class="mt-2">
                    <label for="iname" class="font-semibold text-sm @error('name') is-invalid @enderror">Nome</label><br>
                    <input type="text" name="name" id="iname" style="height: 35px" class="rounded-md ring-2 opacity-60" value="{{$event->name}}">
                        @error('name')
                            <div class="invalid feedback text-red-600 ">
                                {{ $message }}
                            </div>
                        @enderror
                </div>
                <div class="mt-2">
                    <label for="idate" class="font-semibold text-sm @error('date') is-invalid @enderror">Data</label><br>
                    <input type="date" name="date" id="idate" style="height: 35px" class="rounded-md ring-2 opacity-60" value="{{date('d/m/Y', strtotime($event->date))}}">
                        @error('date')
                            <div class="invalid feedback text-red-600">
                                {{ $message }}
                            </div>
                        @enderror
                </div>
            </div>

            <div class="grid grid-cols-2">
                <div class="mt-2">
                    <label for="idescription" class="font-semibold text-sm @error('description') is-invalid @enderror">Descrição</label><br>
                    <input type="text" name="description" id="idescription" style="height: 35px" class="rounded-md ring-2 w-96 opacity-60" value="{{$event->description}}">
                        @error('description')
                            <div class="invalid feedback text-red-600">
                                {{ $message }}
                            </div>
                        @enderror
                </div>
            </div>
        </div>
            <div class="mt-4 mb-5">
                <button type="submit" class="bg-red-400 px-4 py-1 rounded-xl text-white ring-1">Atualizar</button>
            </div>
        </form>
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