@extends('layouts.app')

<<<<<<< HEAD
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ secure_asset('css/mission.css') }}" rel="stylesheet" />
    <title>Mission 1</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


  
</head>

<body>
=======
@section('mission1')
<div>
>>>>>>> 16205460992a46b07d6ee132a49ac06ee2f14487
    <div class="cover-contain">
        

        <img class="selectCharacter" src="{{ secure_asset($character["image"]) }} "/>


        <div class="titleBig d-flex justify-content-center align-items-center">
            <h5>¿Evadirse de los problemas jugando es bueno?</h5>
        </div>
        <div class="containerQuestions">
            @if ($user->impostor == 1)
            <div class="question d-flex align-items-center flex-column">
                <p class="text-danger">Convéncelos de que si, crea controversia.</p>
            </div>
            @endif
        </div>
        <a href="{{route('mission2')}}" class="buttonNext"><img class="next" src="{{ secure_asset('images/next.png') }}" alt=""></a>
        
    </div>
<<<<<<< HEAD
    <script src="{{secure_asset('js/mission.js')}}"></script>
    </body>
=======
    
</div>
@endsection
>>>>>>> 16205460992a46b07d6ee132a49ac06ee2f14487

   
