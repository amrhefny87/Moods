@extends('layouts.app');

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="{{asset('css/waiting.css')}}" rel="stylesheet"/>
        <title>Laravel8</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
 *{
     box-sizing: border-box;
    margin: 0;
    padding: 0;
    }
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
    <div class="preloader mt-5">
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
        
    </body>