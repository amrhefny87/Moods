@extends('layouts.app')
@section('waiting')
<div>
    <div class="preloader">
        <div class="preloader__ring">
            <div class="preloader__sector">L</div>
            <div class="preloader__sector">o</div>
            <div class="preloader__sector">a</div>
            <div class="preloader__sector">d</div>
            <div class="preloader__sector">i</div>
            <div class="preloader__sector">n</div>
            <div class="preloader__sector">g</div>
            <div class="preloader__sector">.</div>
            <div class="preloader__sector">.</div>
            <div class="preloader__sector">.</div>
            <div class="preloader__sector"></div>
            <div class="preloader__sector"></div>
            <div class="preloader__sector"></div>
            <div class="preloader__sector"></div>
            <div class="preloader__sector"></div>
            <div class="preloader__sector"></div>
            <div class="preloader__sector"></div>
            <div class="preloader__sector"></div>
            <div class="preloader__sector"></div>
            <div class="preloader__sector"></div>
            <div class="preloader__sector"></div>
            <div class="preloader__sector"></div>
            <div class="preloader__sector"></div>
            <div class="preloader__sector"></div>
            <div class="preloader__sector"></div>
            <div class="preloader__sector"></div>
            <div class="preloader__sector"></div>
            <div class="preloader__sector"></div>
            <div class="preloader__sector"></div>
            <div class="preloader__sector"></div>
        </div>
        <div class="preloader__ring">
            <div class="preloader__sector">L</div>
            <div class="preloader__sector">o</div>
            <div class="preloader__sector">a</div>
            <div class="preloader__sector">d</div>
            <div class="preloader__sector">i</div>
            <div class="preloader__sector">n</div>
            <div class="preloader__sector">g</div>
            <div class="preloader__sector">.</div>
            <div class="preloader__sector">.</div>
            <div class="preloader__sector">.</div>
            <div class="preloader__sector"></div>
            <div class="preloader__sector"></div>
            <div class="preloader__sector"></div>
            <div class="preloader__sector"></div>
            <div class="preloader__sector"></div>
            <div class="preloader__sector"></div>
            <div class="preloader__sector"></div>
            <div class="preloader__sector"></div>
            <div class="preloader__sector"></div>
            <div class="preloader__sector"></div>
            <div class="preloader__sector"></div>
            <div class="preloader__sector"></div>
            <div class="preloader__sector"></div>
            <div class="preloader__sector"></div>
            <div class="preloader__sector"></div>
            <div class="preloader__sector"></div>
            <div class="preloader__sector"></div>
            <div class="preloader__sector"></div>
            <div class="preloader__sector"></div>
            <div class="preloader__sector"></div>
        </div>
    </div>
    <div class="waiting d-flex justify-content-center mt-5">
                
                    <a href="{{route('redirectUsers')}}" class="text-white">
                        <button class="btn btn-outline-light">
                        Espere hasta que el administrador inicie el juego, luego haga click
                        </button>
                    </a>
                    @if(!empty($waitMsg))
                    <div class="msg mt-1"> 
                        <p class="msg-text mx-2">{{$waitMsg}}</p>
                    </div>
                    @endif
                
    </div>
</div>
@endsection
