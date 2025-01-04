<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'lara event')</title>
    @vite('resources/css/app.css')
    @yield('head')
</head>
<body>
<div id="app">
    <header class="container mx-auto py-3">
        <a href="/" class="font-black text-2xl ">رویدادهای لاراول</a>
        <nav class="nav py-2">
            <ul class="flex gap-x-4">
                <li><a href="{{route('home')}}">خانه</a></li>
                <li><a href="{{route('auth.login')}}">ورود</a></li>
            </ul>
        </nav>
    </header>
    <main>@yield('content')</main>
</div>

@vite('resources/js/app.js')
</body>
</html>
