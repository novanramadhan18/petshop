<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield('title', 'indirapetshop')</title>
</head>
<body>
    @include('includes.navbar-user')
    <div class="w-full pt-20">
        @yield('content')
    </div>
</body>
</html>