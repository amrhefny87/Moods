@extends('layouts.app')

<<<<<<< HEAD
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ secure_asset('css/mission.css') }}" rel="stylesheet" />
    <title>Mission 2</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


  
</head>

<body>
=======
@section('mission2')
<div>
>>>>>>> 16205460992a46b07d6ee132a49ac06ee2f14487
    <div class="cover-contain">
        

        <img class="selectCharacter" src="{{ secure_asset($character["image"]) }} "/>


        <div class="titleBig d-flex justify-content-center align-items-center">
            <h5>Señala cuál de estas son estrategias de los videojuegos para engancharnos!</h5>
        </div>
        <div class="containerQuestions">
            <div class="question d-flex align-items-center flex-column">
                <p class="text-answer">Premios instantáneos</p>
            </div>
            @if ($user->impostor == 1)
            <div class="question d-flex align-items-center flex-column">
                <p class="text-danger">Poder jugar varios modos e infinito</p>
            </div>
            @else
            <div class="question d-flex align-items-center flex-column">
                <p>Poder jugar varios modos e infinito</p>
            </div>
            @endif


            <div class="question d-flex align-items-center flex-column">
                <p>Compras dentro del videojuego para mejorar y llegar más alto</p>
            </div>
            <div class="question d-flex align-items-center flex-column">
                <p>El precio inicial del juego</p>
            </div>
        </div>
        <a href="{{route('mission3')}}" class="buttonNext"><img class="next" src="{{ secure_asset('images/next.png') }}" alt=""></a>

    </div>
<<<<<<< HEAD
    <script src="{{secure_asset('js/mission.js')}}"></script>
    </body>
=======
>>>>>>> 16205460992a46b07d6ee132a49ac06ee2f14487

</div>
@endsection

   
