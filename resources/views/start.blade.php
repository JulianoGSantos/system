<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<header>
    <div>HOME</div>
</header>
<body>
    <a href=" {{route ('index.client') }}">Cliente</a>
    <a href=" {{route ('index.employee') }}">Colaborador</a>
    <a href=" {{route ('index.user') }}">Usuário</a>
</body>
<footer>
    <script src="https://cdn.tailwindcss.com"></script>
    <a href=" {{ route('search') }}">Busca</a>
    <div class="container mx-auto px-4 py-8">
        <form action=" {{ route('logout') }}" method="POST" class="shadow bg-purple-500 hover:bg-purple-40 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
        @csrf
        <button type="submit">Logout</button>
        </form>
    </div>
</footer>
</html>