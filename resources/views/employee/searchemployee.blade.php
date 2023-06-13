<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Colaboradores</title>
</head>
<body>
    @foreach ($employees as $employee)
        <tr>
            <div>{{ $employee->name}}
            {{ $employee->office}}</div><a href="{{ route('show.employee', $employee->id) }}">Detalhes</a>
        </tr>
    @endforeach
</body>
</html>