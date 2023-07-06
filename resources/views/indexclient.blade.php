<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de clientes</title>
    @extends('client.layouts.app')
</head>
@section('header')
    <header>
        <div class="text-center">CADASTRO DE CLIENTES</div>
    </header>
@endsection

@section('content')
    <body>
        <form action=" {{ route('store.client') }}" method="POST">
        @csrf
        <div class="mt-4 space-y-4"></div>
            <label for="iname" class="block text-sm font-semibold leading-6 text-gray-900">Nome</label><br>
            <input type="text" name="name" id="iname" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"><br>
            <label for="icpf">CPF</label><br>
            <input type="text" name="cpf" id="icpf"><br>
            <label for="iemail">E-mail</label><br>
            <input type="text" name="email" id="iemail">
        <div class="mt-4 space-y-4">Endereço</div>
            <label for="istreet">Rua</label><br>
            <input type="text" name="street" id="istreet"><br>
            <label for="inumber">Número</label><br>
            <input type="text" name="number" id="inumber"><br>
            <label for="icomplement">Complemento</label><br>
            <input type="text" name="complement" id="icomplement"><br>
            <label for="icity">Cidade</label><br>
            <input type="text" name="city" id="icity"><br>
            <label for="istate">Estado</label><br>
            <input type="text" name="state" id="istate"><br>
            <label for="icep">CEP</label><br>
            <input type="text" name="cep" id="icep"><br>
        <div class="mt-4">Telefone</div>   
            <label for="icellphone">Celular</label><br>
            <input type="text" name="cellphone" id="icellphone"><br>
            <label for="icellphone2">Celular2</label><br>
            <input type="text" name="cellphone2" id="icellphone2"><br>
        <div class="mt-4">
            <button type="submit" class="bg-red-400 px-4 py-1 rounded-xl text-white ring-1">Cadastrar</button>
        </div>
        </form>
    </body>
@endsection

@section('footer')
    <footer>
        <div class="text-center"><a href="{{ route('start') }}">homepage</a></div>
    </footer>
@endsection
</html>