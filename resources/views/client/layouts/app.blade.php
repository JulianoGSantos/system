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
    <div class="content grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
        @yield('content')
    </div>
    <footer>
        @yield('footer')
    </footer>
    
</body>
</html>