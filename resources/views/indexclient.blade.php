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
            <div class="mt-2">CADASTRO DE PACIENTES</div>
            <div class="grid grid-cols-2">
                <div class="mt-2">
                    <label for="iname" class="font-semibold text-sm">Nome</label><br>
                    <input type="text" name="name" id="iname" style="height: 35px" class="rounded-md ring-2">
                </div>
                <div class="mt-2">
                    <label for="icpf" class="font-semibold text-sm">CPF</label><br>
                    <input type="text" name="cpf" id="icpf" style="height: 35px" class="rounded-md ring-2" >
                </div>
            </div>
                <div class="mt-2">
                    <label for="iemail" class="font-semibold text-sm">E-mail</label><br>
                    <input type="text" name="email" id="iemail" style="height: 35px" class="rounded-md ring-2">
                </div>
            <div class="mt-12 font-semibold text-sm">Endereço</div>
            <div class="grid grid-cols-2">
                    <div class="mt-2">
                        <label for="istreet" class="font-semibold text-sm">Rua</label><br>
                        <input type="text" name="street" id="istreet" style="height: 35px" class="rounded-md ring-2"><br>
                    </div>
                    <div class="mt-2">
                        <label for="inumber" class="font-semibold text-sm">Número</label><br>
                        <input type="text" name="number" id="inumber" style="height: 35px" class="rounded-md ring-2"><br>
                    </div>
                    <div class="mt-2">
                        <label for="icomplement" class="font-semibold text-sm">Complemento</label><br>
                        <input type="text" name="complement" id="icomplement" style="height: 35px" class="rounded-md ring-2"><br>
                    </div>
                    <div class="mt-2">
                        <label for="icity" class="font-semibold text-sm">Cidade</label><br>
                        <input type="text" name="city" id="icity" style="height: 35px" class="rounded-md ring-2"><br>
                    </div>
                    <div class="mt-2">
                        <label for="istate" class="font-semibold text-sm">Estado</label><br>
                        <input type="text" name="state" id="istate" style="height: 35px" class="rounded-md ring-2"><br>
                    </div>
                    <div class="mt-2">
                        <label for="icep" class="font-semibold text-sm">CEP</label><br>
                        <input type="text" name="cep" id="icep" style="height: 35px" class="rounded-md ring-2"><br>
                    </div>
                </div>
            <div class="mt-12 font-semibold text-sm">Telefone</div>    
            <div class="grid grid-cols-2">
                    <div>
                        <label for="icellphone" class="font-semibold text-sm">Celular</label><br>
                        <input type="text" name="cellphone" id="icellphone" style="height: 35px" class="rounded-md ring-2"><br>
                    </div>
                    <div>
                        <label for="icellphone2" class="font-semibold text-sm">Celular2</label><br>
                        <input type="text" name="cellphone2" id="icellphone2" style="height: 35px" class="rounded-md ring-2"><br>
                    </div>
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