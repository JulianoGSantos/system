<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="w-8/12 h-screen bg-gray-200">
    <head class="header bg-green-500 ml-60">
        @yield('header')
    </head>
    <div class="content bg-white rounded-2xl border-2 border-sky-600 leading-6 mt-5 ml-60 pl-16">
        @yield('content')
    </div>
    <footer class="footer ml-60">
        @yield('footer')
    </footer>
</body>
</html>