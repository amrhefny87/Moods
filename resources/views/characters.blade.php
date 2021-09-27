
@extends('layouts.app')
@section('characters')
<div class="characters">
<div class="containerCharacters p-4">

    <div class="characters-container">
        <div class="who-are-you">
            <img class="ch0" src="{{ secure_asset('images/character0.jpg') }} " />
            <h2>¿Quién eres?</h2>
            
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
                <img class="next" src="{{ secure_asset('images/next.png') }}" alt="">
            </a>
        </div>  
    </div>



    
    <script src="{{secure_asset('js/characteres.js')}}"></script>
</div>
</div>
@endsection

