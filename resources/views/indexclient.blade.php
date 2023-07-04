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
    <body class="bg-gray-300">
        <form action=" {{ route('store.client') }}" method="POST">
        @csrf
            <label for="iname">Nome</label>
            <input type="text" name="name" id="iname">
            <label for="icpf">CPF</label>
            <input type="text" name="cpf" id="icpf">
            <label for="iemail">E-mail</label>
            <input type="text" name="email" id="iemail">
            <div>Endereço</div>
            <input type="text" name="street" id="istreet">
            <label for="istreet">Rua</label>
            <input type="text" name="number" id="inumber">
            <label for="inumber">Número</label>
            <input type="text" name="complement" id="icomplement">
            <label for="icomplement">Complemento</label>
            <input type="text" name="city" id="icity">
            <label for="icity">Cidade</label>
            <input type="text" name="state" id="istate">
            <label for="istate">Estado</label>
            <input type="text" name="cep" id="icep">
            <label for="icep">CEP</label>
            <div>Telefone</div>
            <input type="text" name="cellphone" id="icellphone">
            <label for="icellphone">Celular</label>
            <input type="text" name="cellphone2" id="icellphone2">
            <label for="icellphone2">Celular2</label>
            <button type="submit">Cadastrar</button>
        </form>
    </body>
@endsection

@section('footer')
    <footer>
        <div><a href="{{ route('start') }}">homepage</a></div>
    </footer>
@endsection
</html>