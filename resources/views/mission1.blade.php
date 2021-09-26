@extends('layouts.app')

@section('mission1')
<div>
    <div class="cover-contain">
        

        <img class="selectCharacter" src="{{ asset($character["image"]) }} "/>


        <div class="titleBig d-flex justify-content-center align-items-center">
            <h3>¿Evadirse de los problemas jugando es bueno?</h3>
        </div>
        <div class="containerQuestions">
            @if ($user->impostor == 1)
            <div onclick="borderActive($event)" class="question d-flex align-items-center flex-column">
                <p class="text-danger">Convéncelos de que si, crea controversia.</p>
            </div>
            @endif
        </div>
        <a href="{{route('mission2')}}" class="buttonNext"><img class="next" src="{{ asset('images/next.png') }}" alt=""></a>
        
    </div>
    
</div>
@endsection

   
