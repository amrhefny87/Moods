@extends('layouts.app')

@section('mission2')
<div>
    <div class="cover-contain">
        {{-- <img class="selectCharacter" src="require('../../../public/storage/images/ch1.png').default"/> --}}
        <img class="selectCharacter" src="{{ asset($character["image"]) }} "/>
        <div class="titleBig d-flex justify-content-center align-items-center">
            <h6>¿Si no tengo un problema con los videojuegos, pueden estos igualmente afectar mi estado de animo?</h6>
        </div>
        <a href="{{route('missionImp')}}" class="buttonNext">
            <img class="next" src="{{ asset('images/next.png') }}" alt="">
        </a>
    </div>
</div>
@endsection
   
