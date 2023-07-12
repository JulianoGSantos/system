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
<div class="content bg-gradient-to-br from-blue-600 to-green-400 p-2 m-2 border-2 border-yellow-200 rounded-xl">
    <body>
        <a href=" {{route ('index.client') }}">CADASTRAR PACIENTE</a>
    </body>
</div>
<footer>
    <script src="https://cdn.tailwindcss.com"></script>
    <a href=" {{ route('search') }}">Busca</a>
    <div class="container mx-auto px-4 py-8">
        <form action=" {{ route('logout') }}" method="POST" class="shadow bg-purple-500 hover:bg-purple-40 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
        @csrf
        <button type="submit" class="bg-red-400 px-4 py-1 rounded-xl text-white ring-1">Logout</button>
        </form>
    </div>
</footer>
</html>