<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de consultas</title>
    @extends('client.layouts.app')
</head>

@section('content')
    <body>
        <form action=" {{ route('store.appointment') }}" method="POST">
        @csrf
        <div>
            <div class="mt-5">CADASTRO DE CONSULTAS</div>
            <div class="grid grid-cols-2">

                <div class="mt-2">
                    <label for="iname" class="font-semibold text-sm">Nome</label><br>
                    <input type="text" name="name" id="iname" style="height: 35px" class=" form-control @error('name') is invalid @enderror rounded-md ring-2  opacity-60" value=" {{ old('name')}}"><br>
                    @error('name')
                        <div class="invalid-feedback text-red-600">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mt-2">
                    <label for="idescription" class="font-semibold text-sm">Descrição</label><br>
                    <input type="text" name="description" id="idescription" style="height: 35px" class=" form-control @error('description') is invalid @enderror rounded-md ring-2 opacity-60" >
                    @error('description')
                    <div class="invalid-feedback text-red-600">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            
            <div class="mt-4 mb-5">
                <button type="submit" class="bg-red-400 px-4 py-1 rounded-xl text-white ring-1">Cadastrar</button>
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