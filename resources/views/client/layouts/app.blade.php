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
    <div class="content bg-blue-200 flex flex-basis-10 rounded-2xl border-2 border-sky-600 ml-40 pl-28">
        @yield('content')
    </div>
    <footer>
        @yield('footer')
    </footer>
    
</body>
</html>