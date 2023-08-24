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

</header>
@section('content')
    <body>
        <form action=" {{ route('update.client', $client->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <div class="mt-2">CADASTRO DE PACIENTES</div>
            <div class="grid grid-cols-2">
                <div class="mt-2">
                    <label for="iname" class="font-semibold text-sm @error('name') is-invalid @enderror">Nome</label><br>
                    <input type="text" name="name" id="iname" style="height: 35px" class="rounded-md ring-2 opacity-60" value="{{$client->name}}">
                        @error('name')
                            <div class="invalid feedback text-red-600 ">
                                {{ $message }}
                            </div>
                        @enderror
                </div>
                <div class="mt-2">
                    <label for="icpf" class="font-semibold text-sm @error('cpf') is-invalid @enderror">CPF</label><br>
                    <input type="text" name="cpf" id="icpf" style="height: 35px" class="rounded-md ring-2 opacity-60" value="{{$client->cpf}}">
                        @error('cpf')
                            <div class="invalid feedback text-red-600">
                                {{ $message }}
                            </div>
                        @enderror
                </div>
            </div>

            <div class="grid grid-cols-2">
                <div class="mt-2">
                    <label for="iemail" class="font-semibold text-sm @error('email') is-invalid @enderror">E-mail</label><br>
                    <input type="text" name="email" id="iemail" style="height: 35px" class="rounded-md ring-2 opacity-60" value="{{$client->email}}">
                        @error('email')
                            <div class="invalid feedback text-red-600">
                                {{ $message }}
                            </div>
                        @enderror
                </div>

                <div class="mt-2">
                    <label for="ibirth" class="font-semibold text-sm @error ('birth') is-invalid @enderror">Nascimento</label><br>
                    <input type="text" name="birth" id="ibirth" style="height: 35px" class="rounded-md ring-2 opacity-60" value="{{ date('d/m/Y', strtotime($client->birth)) }}">
                    @error('birth')
                        <div class=" invalid-feedback text-red-600">
                            {{$message}}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="mt-12 font-semibold text-sm">Endereço</div>
            <div class="grid grid-cols-2">
                    <div class="mt-2">
                        <label for="istreet" class="font-semibold text-sm @error('street') is-invalid @enderror">Rua</label><br>
                        <input type="text" name="street" id="istreet" style="height: 35px" class="rounded-md ring-2 opacity-60" value="{{$client->street}}"><br>
                            @error('street')
                                <div class="invalid feedback text-red-600">
                                    {{ $message }}
                                </div>
                            @enderror
                    </div>
                    <div class="mt-2">
                        <label for="inumber" class="font-semibold text-sm @error('number') is-invalid @enderror">Número</label><br>
                        <input type="text" name="number" id="inumber" style="height: 35px" class="rounded-md ring-2 opacity-60" value="{{$client->number}}"><br>
                            @error('number')
                                <div class="invalid feedback text-red-600">
                                    {{ $message }}
                                </div>
                            @enderror
                    </div>
                    <div class="mt-2">
                        <label for="icomplement" class="font-semibold text-sm @error('complement') is-invalid @enderror">Bairro</label><br>
                        <input type="text" name="complement" id="icomplement" style="height: 35px" class="rounded-md ring-2 opacity-60" value="{{$client->complement}}"><br>
                        @error('complement')
                            <div class="invalid feedback text-red-600">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mt-2">
                        <label for="icity" class="font-semibold text-sm @error('city') is-invalid @enderror">Cidade</label><br>
                        <input type="text" name="city" id="icity" style="height: 35px" class="rounded-md ring-2 opacity-60" value="{{$client->city}}"><br>
                        @error('city')
                            <div class="invalid feedback text-red-600">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mt-2">
                        <label for="istate" class="font-semibold text-sm @error('state') is-invalid @enderror">Estado</label><br>
                        <input type="text" name="state" id="istate" style="height: 35px" class="rounded-md ring-2 opacity-60" value="{{$client->state}}"><br>
                        @error('state')
                            <div class="invalid feedback text-red-600">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mt-2">
                        <label for="icep" class="font-semibold text-sm @error('cep') is-invalid @enderror">CEP</label><br>
                        <input type="text" name="cep" id="icep" style="height: 35px" class="rounded-md ring-2 opacity-60" value="{{$client->cep}}"><br>
                        @error('cep')
                            <div class="invalid feedback text-red-600">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            <div class="mt-12 font-semibold text-sm">Telefone</div>    
            <div class="grid grid-cols-2">
                    <div>
                        <label for="icellphone" class="font-semibold text-sm @error('cellphone') is-invalid @enderror">Celular</label><br>
                        <input type="text" name="cellphone" id="icellphone" style="height: 35px" class="rounded-md ring-2 opacity-60" value="{{$client->cellphone}}"><br>
                        @error('cellphone')
                            <div class="invalid feedback text-red-600">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label for="icellphone2" class="font-semibold text-sm @error('cellphone2') is-invalid @enderror">Celular2</label><br>
                        <input type="text" name="cellphone2" id="icellphone2" style="height: 35px" class="rounded-md ring-2 opacity-60" value="{{$client->cellphone2}}"><br>
                        @error('cellphone2')
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
        <div class="text-center text-blue-600" ><a href="javascript:history.back()">voltar</a></div>
        <div class="text-center text-blue-600"><a href="{{ route('start') }}">página inicial</a></div>
    </footer>
@endsection
</html>