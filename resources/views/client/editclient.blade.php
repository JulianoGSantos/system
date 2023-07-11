<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Pacientes</title>
    @extends('client.layouts.app')
</head>
<header>
    <div>EDIÇÃO DE CLIENTES</div>
</header>
@section('content')
    <body>
        <form action=" {{ route('update.client', $client->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="grid grid-cols-2">
            <label for="iname">Nome</label>
            <input type="text" name="name" id="iname" value="{{$client->name}}">
            <label for="icpf">CPF</label>
            <input type="text" name="cpf" id="icpf" value="{{$client->cpf}}">
            <label for="iemail">E-mail</label>
            <input type="text" name="email" id="iemail" value="{{$client->email}}">
            <div>Endereço</div>
            <input type="text" name="street" id="istreet" value="{{$client->street}}">
            <label for="istreet">Rua</label>
            <input type="text" name="number" id="inumber" value="{{$client->number}}">
            <label for="inumber">Número</label>
            <input type="text" name="complement" id="icomplement" value="{{$client->complement}}">
            <label for="icomplement">Complemento</label>
            <input type="text" name="city" id="icity" value="{{$client->city}}">
            <label for="icity">Cidade</label>
            <input type="text" name="state" id="istate" value="{{$client->state}}">
            <label for="istate">Estado</label>
            <input type="text" name="cep" id="icep" value="{{$client->cep}}">
            <label for="icep">CEP</label>
            <div>Telefone</div>
            <input type="text" name="cellphone" id="icellphone" value="{{$client->cellphone}}">
            <label for="icellphone">Celular</label>
            <input type="text" name="cellphone2" id="icellphone2" value="{{$client->cellphone2}}">
            <label for="icellphone2">Celular2</label>
            <div class="mt-4 mb-5">
                <button type="submit" class="bg-red-400 px-4 py-1 rounded-xl text-white ring-1">Atualizar</button>
            </div>
        </div>
        </form>
    </body>
@endsection
@section('footer')
    <footer>
        <div class="text-center text-blue-600"><a href="{{ route('start') }}">página inicial</a></div>
        <div class="text-center text-blue-600"><a href="javascript:history.back()">voltar</a></div>
    </footer>
@endsection
</html>