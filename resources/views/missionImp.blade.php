@extends('layouts.app')

@extends('layouts.app')

@section('missionImp')
<div>
    <div class="cover-contain">
        {{-- <img class="selectCharacter" src="require('../../../public/storage/images/ch1.png').default"/> --}}

        <img class="selectCharacter" src="{{ secure_asset($character["image"]) }} "/>


        <div class="titleBig d-flex justify-content-center align-items-center">
            <h3>Elige al IMPOSTOR!</h3>
        </div>
        <div class="containerQuestions d-flex flex-row">
            @csrf
                @foreach ($users as $user)
                <div class="question d-flex align-items-center justify-content-center mr-2">
                    <p>{{$user->name}}</p>
                </div>
                @endforeach
        </div>
        <div class="cont-temporizador time d-flex justify-content-center align-items-center">


                <h1 class="text-white"></h1>
        </div>

    </div>
</div>
   
