
@extends('layouts.app')
@section('characters')
<div class="characters">
<div class="containerCharacters p-4">

<<<<<<< HEAD
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{secure_asset('css/characters.css') }}" rel="stylesheet" />
    <title>Laravel8</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->






</head>

<body class="containerCharacters">
    <div class="characters-container">
        <div class="who-are-you container ">
            <img class="ch0" src="{{ secure_asset('images/character0.jpg') }} " />
            <h2>Who are you?</h2>
=======
    <div class="characters-container">
        <div class="who-are-you">
            <img class="ch0" src="{{ asset('images/character0.jpg') }} " />
            <h2>¿Quién eres?</h2>
>>>>>>> 16205460992a46b07d6ee132a49ac06ee2f14487
            
        </div>
        <div class="ml-4">
            <div class="user-ch">
                <img class="ch1 mb-3" src="{{secure_asset($character["image"])}}"/>
                <p class="myCharacter">Eres: {{$character["name"]}}</p>
                @csrf
                @if ($user->impostor === 1)
                <p class="myCharacter">Eres el/la impostor</p>
                @endif
            </div>
            
        </div>
        <div class="next-ch d-flex align-items-end">
            <a href="{{route('mission1')}}">
                <img class="next" src="{{ asset('images/next.png') }}" alt="">
            </a>
        </div>  
    </div>
<<<<<<< HEAD
    <div>
        <a href="{{route('mission1')}}">
            <img class="next" src="{{ secure_asset('images/next.png') }}" alt="">
        </a>
    </div>  
    <script src="{{secure_asset('js/characteres.js')}}"></script>
</body>
=======

    
    <script src="{{asset('js/characteres.js')}}"></script>
</div>
</div>
@endsection
>>>>>>> 16205460992a46b07d6ee132a49ac06ee2f14487

