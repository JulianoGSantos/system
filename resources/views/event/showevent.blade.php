<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ date('d/m/Y', strtotime($event->date))}}</title>
    @extends('client.layouts.app')
</head>
@section('content')  
    <header>
        <h1 class="mt-5  text-4xl">{{ date('d/m/Y', strtotime($event->date))}} </h1>
    </header> 
    <body>
        <div class="text-xl">
            <ul class="divide-y divide-slate-400">
                <li><div class="mt-3">Descrição: {{$event->description}}</div></li>
                <li><div class="mt-3">Nome: {{$event->name}}</div></li>
            </ul>
        </div>
        <form action=" {{ route('destroy.event', $event->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <div class="mt-4 mb-5">
                <button type="submit" class="bg-red-700 px-4 py-1 rounded-xl text-white ring-1">Deletar</button>
            </div>
        </form>
    </body>
@endsection

@section('footer')
    <footer>
        <div class="text-center text-blue-600"><a href="javascript:history.back()">voltar</a></div>
        <div class="text-center text-blue-600"><a href="{{ route('start') }}">página inicial</a></div>
    </footer>
@endsection

</html>