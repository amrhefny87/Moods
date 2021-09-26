@extends('layouts.app')

@section('mission2')
<div>
    <div class="cover-contain">
        

        <img class="selectCharacter" src="{{ asset($character["image"]) }} "/>


        <div class="titleBig d-flex justify-content-center align-items-center">
            <h3>Señala cuál de estas son estrategias de los videojuegos para engancharnos!</h3>
        </div>
        <div class="containerQuestions">
            <div onclick="borderActive($event)" class="question d-flex align-items-center flex-column">
                <p class="text-answer">Premios instantáneos</p>
            </div>
            @if ($user->impostor == 1)
            <div onclick="borderActive($event)" class="question d-flex align-items-center flex-column">
                <p class="text-danger">Poder jugar varios modos e infinito</p>
            </div>
            @else
            <div onclick="borderActive($event)" class="question d-flex align-items-center flex-column">
                <p>Poder jugar varios modos e infinito</p>
            </div>
            @endif


            <div onclick="borderActive($event)" class="question d-flex align-items-center flex-column">
                <p>Compras dentro del videojuego para mejorar y llegar más alto</p>
            </div>
            <div onclick="borderActive($event)" class="question d-flex align-items-center flex-column">
                <p>El precio inicial del juego</p>
            </div>
        </div>
        <a href="{{route('mission3')}}" class="buttonNext"><img class="next" src="{{ asset('images/next.png') }}" alt=""></a>

    </div>

</div>
@endsection

   
