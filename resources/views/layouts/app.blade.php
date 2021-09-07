<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<<<<<<< HEAD
    <link href="{{ asset('css/characters.css') }}" rel="stylesheet">


=======
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
>>>>>>> d2535b5d4b095723641a4a7dec6de4ceb27aa7d9
</head>
<body>
    <div id="app">
        
        <body class="py-4 prueba">
            @yield('content')
        </body>

    </div>
</body>
</html>


