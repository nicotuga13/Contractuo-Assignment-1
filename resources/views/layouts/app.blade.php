<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Contractuo') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="flex justify-end items-center border-b border-gray-300 p-2">
            @guest
                @if (Route::has('login'))
                    <a class="text-blue-400 hover:text-blue-600 duration-300 font-semibold p-2" href="{{ route('login') }}">{{ __('Login') }}</a>
                @endif
                @if (Route::has('register'))
                    <a class="text-blue-400 hover:text-blue-600 duration-300 font-semibold p-2" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
            @endguest
        </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
