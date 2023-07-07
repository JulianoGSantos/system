<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de clientes</title>
    @extends('client.layouts.app')
</head>

@section('content')
    <body>
        <form action=" {{ route('store.client') }}" method="POST">
        @csrf
        <div>
            <div>CADASTRO DE CLIENTES</div>
            <div class="grid grid-cols-2">
                <div class="">
                    <label for="iname">Nome</label><br>
                    <input type="text" name="name" id="iname" class="rounded-md ring-2">
                </div>
                <div class="">
                    <label for="icpf">CPF</label><br>
                    <input type="text" name="cpf" id="icpf" class="rounded-md ring-2" >
                </div>
            </div>
                <div class="mt-2">
                    <label for="iemail">E-mail</label><br>
                    <input type="text" name="email" id="iemail" class="rounded-md ring-2">
                </div>
            <div class="mt-12">Endereço</div>
            <div class="grid grid-cols-2">
                    <div class="mt-2">
                        <label for="istreet">Rua</label><br>
                        <input type="text" name="street" id="istreet" class="rounded-md ring-2"><br>
                    </div>
                    <div class="mt-2">
                        <label for="inumber">Número</label><br>
                        <input type="text" name="number" id="inumber" class="rounded-md ring-2"><br>
                    </div>
                    <div class="mt-2">
                        <label for="icomplement">Complemento</label><br>
                        <input type="text" name="complement" id="icomplement" class="rounded-md ring-2"><br>
                    </div>
                    <div class="mt-2">
                        <label for="icity">Cidade</label><br>
                        <input type="text" name="city" id="icity" class="rounded-md ring-2"><br>
                    </div>
                    <div class="mt-2">
                        <label for="istate">Estado</label><br>
                        <input type="text" name="state" id="istate" class="rounded-md ring-2"><br>
                    </div>
                    <div class="mt-2">
                        <label for="icep">CEP</label><br>
                        <input type="text" name="cep" id="icep" class="rounded-md ring-2"><br>
                    </div>
                </div>
            <div class="mt-12">Telefone</div>
                <label for="icellphone">Celular</label><br>
                <input type="text" name="cellphone" id="icellphone" class="rounded-md ring-2"><br>
                <label for="icellphone2">Celular2</label><br>
                <input type="text" name="cellphone2" id="icellphone2" class="rounded-md ring-2"><br>
            </div>
            <div class="mt-4 mb-5">
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