<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="w-9/12 h-screen bg-gray-200">
    <head class="text-center">
        @yield('header')
    </head>
    <div class="content bg-gradient-to-br from-blue-600 to-green-400 p-2 m-2 border-2 border-yellow-200 rounded-xl">
        @yield('content')
    </div>
    <footer>
        @yield('footer')
    </footer>
    
</body>
</html>