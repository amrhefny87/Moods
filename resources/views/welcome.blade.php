<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{asset('css/welcom.css')}}" rel="stylesheet"/>
        <title>Laravel8</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
     

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body >
 <div class="cover-contain ">
        <button class="mood">Moods</button>
        @if (Auth::check())
            <a class="enlace-register" href="{{ route('waiting') }}"> <button class="play">Ready To Play</button></a>
        @else
            <a class="enlace-register" href="{{ route('login') }}"> <button class="play">Ready To Play</button></a>
        @endif

    </div>

    <div class="caontainer" id="app">
        <!-- <h1 class="text-muted">Laravel Broadcast Redis Socket.IO</h1>
        <div id="chat-notification"></div> -->
    </div>

    <script>
        window.laravelEchoPort = '{{ env("LARAVEL_ECHO_PORT") }}';
</script>
<script src="//{{ request()->getHost() }}:{{ env('LARAVEL_ECHO_PORT') }}/socket.io/socket.io.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script>
    const userId = '{{ auth()->id() }}';
    window.Echo.channel('public-message-channel')
        .listen('.MessageEvent', (data) => {
            $("#chat-notification").append('<div class="alert alert-warning'> + data.message + '</div>');
        });

    window.Echo.private('message-channel.' + userId)
        .listen('.MessageEvent', (data) => {
            $("#chat-notification").append('<div class="alert alert-danger'> + data.message + '</div>');
        });
</script>


       {{--  <script src="{{asset('js/app.js')}}">
        </script> --}}
    </body>
</html>



