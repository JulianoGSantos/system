<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalhes do Colaborador</title>
</head>
<header>
    <h1> {{$employee->name}} </h1>
</header>
<body>
    <ul>
        <li>{{$employee->office}}</li>
        <li>{{$employee->departament}}</li> 
        <li>{{$employee->cpf}}</li> 
        <li>{{$employee->email}}</li>
        <li>{{$employee->street}}</li> 
        <li>{{$employee->number}}</li> 
        <li>{{$employee->complement}}</li> 
        <li>{{$employee->city}}</li> 
        <li>{{$employee->state}}</li> 
        <li>{{$employee->cep}}</li>
        <li>{{$employee->cellphone}}</li>
        <li>{{$employee->cellphone2}}</li>
        <li>{{$employee->birth}}</li>
        <li>{{$employee->admission}}</li>
    </ul>
</body>
<footer>

</footer>
</html>