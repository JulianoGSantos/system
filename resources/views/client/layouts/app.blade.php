<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <head>
        @yield('header')
    </head>
    <div class="content" bg-blue-500>
        @yield('content')
    </div>
    <footer>
        @yield('footer')
    </footer>
    
</body>
</html>