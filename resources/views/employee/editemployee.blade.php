<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de clientes</title>
</head>
<header>
    <div>EDIÇÃO DE COLABORADORES</div>
</header>
<body>
    <form action=" {{ route('update.employee', $employee->id) }}" method="POST">
    @csrf
    @method('PUT')
        <label for="iname">Nome</label>
        <input type="text" name="name" id="iname" value="{{$employee->name}}">
        <label for="ioffice">Cargo</label>
        <input type="text" name="office" id="ioffice" value="{{$employee->office}}">
        <label for="idepartament">Departamento</label>
        <input type="text" name="departament" id="idepartament" value="{{$employee->departament}}">
        <label for="icpf">CPF</label>
        <input type="text" name="cpf" id="icpf" value="{{$employee->cpf}}">
        <label for="iemail">E-mail</label>
        <input type="text" name="email" id="iemail" value="{{$employee->email}}">
        <div>Endereço</div>
        <input type="text" name="street" id="istreet" value="{{$employee->street}}">
        <label for="istreet">Rua</label>
        <input type="text" name="number" id="inumber" value="{{$employee->number}}">
        <label for="inumber">Número</label>
        <input type="text" name="complement" id="icomplement" value="{{$employee->complement}}">
        <label for="icomplement">Complemento</label>
        <input type="text" name="city" id="icity" value="{{$employee->city}}">
        <label for="icity">Cidade</label>
        <input type="text" name="state" id="istate" value="{{$employee->state}}">
        <label for="istate">Estado</label>
        <input type="text" name="cep" id="icep" value="{{$employee->cep}}">
        <label for="icep">CEP</label>
        <div>Telefone</div>
        <input type="text" name="cellphone" id="icellphone" value="{{$employee->cellphone}}">
        <label for="icellphone">Celular</label>
        <input type="text" name="cellphone2" id="icellphone2" value="{{$employee->cellphone2}}">
        <label for="icellphone2">Celular2</label>
        <label for="ibirth">Nascimento</label>
        <input type="text" name="birth" id="ibirth" value="{{$employee->birth}}">
        <label for="iadmission">Admissão</label>
        <input type="text" name="admission" id="iadmission" value="{{$employee->admission}}">
        <button type="submit">Atualizar</button>
    </form>
</body>
<footer>
    <div><a href="{{ route('start') }}">homepage</a></div>
</footer>
</html>