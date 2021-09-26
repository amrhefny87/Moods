@extends('layouts.app')

@section('mission2')
<div>
    <div class="cover-contain">
        

        <img class="selectCharacter" src="{{ asset($character["image"]) }} "/>


        <div class="titleBig d-flex justify-content-center align-items-center">
            <h5>¿Cómo puedo darme cuenta de que un amigo/a tiene un problema con los videojuegos? </h5>
        </div>
        
        <a href="{{route('mission4')}}" class="buttonNext"><img class="next" src="{{ asset('images/next.png') }}" alt=""></a>

    </div>
</div>
@endsection
   
