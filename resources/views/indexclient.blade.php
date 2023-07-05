<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de clientes</title>
    @extends('client.layouts.app')
</head>
<header>
    <div>CADASTRO DE CLIENTES</div>
</header>

@section('content')
    <body>
        <form action=" {{ route('store.client') }}" method="POST">
        @csrf
        <div class="mt-4 space-y-4"></div>
            <label for="iname">Nome</label>
            <input type="text" name="name" id="iname">
            <label for="icpf">CPF</label>
            <input type="text" name="cpf" id="icpf">
            <label for="iemail">E-mail</label>
            <input type="text" name="email" id="iemail">
        <div class="mt-4 space-y-4">Endereço</div>
            <label for="istreet">Rua</label>
            <input type="text" name="street" id="istreet">
            <label for="inumber">Número</label>
            <input type="text" name="number" id="inumber">
            <label for="icomplement">Complemento</label>
            <input type="text" name="complement" id="icomplement">           
            <label for="icity">Cidade</label>
            <input type="text" name="city" id="icity">
            <label for="istate">Estado</label>
            <input type="text" name="state" id="istate">
            <label for="icep">CEP</label>
            <input type="text" name="cep" id="icep">
        <div class="mt-4">Telefone</div>   
            <label for="icellphone">Celular</label>
            <input type="text" name="cellphone" id="icellphone">
            <label for="icellphone2">Celular2</label>
            <input type="text" name="cellphone2" id="icellphone2"> 
        <div class="mt-4">
            <button type="submit" class="bg-red-400 px-4 py-1 rounded-xl text-white ring-1">Cadastrar</button>
        </div>
        </form>
    </body>
@endsection

@section('footer')
    <footer>
        <div><a href="{{ route('start') }}">homepage</a></div>
    </footer>
@endsection
</html>