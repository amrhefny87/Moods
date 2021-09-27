@extends('layouts.app')

@section('mission2')
<div>
    <div class="cover-contain">
        {{-- <img class="selectCharacter" src="require('../../../public/storage/images/ch1.png').default"/> --}}
        <img class="selectCharacter" src="{{ asset($character["image"]) }} "/>
        <div class="titleBig d-flex justify-content-center align-items-center">
            <h5>Que consecuencias puede generar el uso abusivo de los videojuegos y porque:</h5>
        </div>
        <div class="containerQuestions">
            <div class="question d-flex align-items-center flex-column">
                <p>Aislamiento</p>
            </div>
            <div class="question d-flex align-items-center flex-column">
                <p>Ira</p>
            </div>
            <div class="question d-flex align-items-center flex-column">
                <p>Insomnio</p>
            </div>
            <div class="question d-flex align-items-center flex-column">
                <p>Ninguno de los anteriores</p>
            </div>
        </div>
        <a href="{{route('mission5')}}" class="buttonNext">
            <img class="next" src="{{ asset('images/next.png') }}" alt="">
        </a>
    </div>
</div>
@endsection
   
