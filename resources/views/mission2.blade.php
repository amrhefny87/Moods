@extends('layouts.app')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/mission.css') }}" rel="stylesheet" />
    <title>Mission 2</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


  
</head>

<body>
    <div class="cover-contain">
        {{-- <img class="selectCharacter" src="require('../../../public/storage/images/ch1.png').default"/> --}}

        <img class="selectCharacter" src="{{ asset($character["image"]) }} "/>


        <div class="titleBig d-flex justify-content-center align-items-center">
            <h3>Señala cuál de estas son estrategias de los videojuegos para engancharnos!</h3>
        </div>
        <div class="containerQuestions">
            <div onclick="borderActive($event)" class="question d-flex align-items-center flex-column">
                <p>Premios instantáneos</p>
            </div>
            <div onclick="borderActive($event)" class="question d-flex align-items-center flex-column">
                <p>Poder jugar varios modos e infinito</p>
            </div>
            <div onclick="borderActive($event)" class="question d-flex align-items-center flex-column">
                <p>Compras dentro del videojuego para mejorar y llegar más alto</p>
            </div>
            <div onclick="borderActive($event)" class="question d-flex align-items-center flex-column">
                <p>El precio inicial del juego</p>
            </div>
        </div>
        <button onclick="nextQuestion()" class="buttonNext">NEXT</button>
    </div>
    <script src="{{asset('js/mission.js')}}"></script>
    </body>

    </html>
   
