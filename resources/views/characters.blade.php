@extends('layouts.app');
@section('content')

<div class="containerCharacters d-flex justify-content-center align-items-center">
            <div class="incognite d-flex align-items-center flex-column">
                <img class="ch0" src="{{ asset('images/character0.jpg') }} "/>
                <h2>Who are you?</h2>
            </div>
            <div class="d-flex justify-content-center align-items-center flex-wrap container">
                <div class="d-flex align-items-center flex-column">
                    <img class="selectCharacter" src="{{ asset('images/ch1.png') }} "/>
                    <p>The Outlier</p>
                </div>
                <div class="d-flex align-items-center flex-column">
                    <img class="selectCharacter" src="{{ asset('images/ch2.png') }} "/>
                    <p>The Stronger</p>
                </div>
                <div class="d-flex align-items-center flex-column">
                    <img class="selectCharacter" src="{{ asset('images/ch3.png') }} "/>
                    <p>The Rebel</p>
                </div>
                <div class="d-flex align-items-center flex-column">
                    <img class="selectCharacter" src="{{ asset('images/ch4.png') }} "/>
                    <p>The Saviour</p>
                </div>
                <div class="d-flex align-items-center flex-column">
                    <img class="selectCharacter" src="{{ asset('images/ch5.png') }} "/>
                    <p>The Diva</p>
                </div>
            </div>
         <!--    <div class="icones ">
                <a href="/selection">
                    <img class="fas fa-arrow-left" src="<?php echo asset('images/return.png'); ?>"/>
                </a>    
                <a href="/">
                    <img class="fas fa-home" src="<?php echo asset('images/home.png'); ?>"/>
                </a>
            </div> -->
    </div>


    @endsection
