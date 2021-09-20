@extends('layouts.app');

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{asset('css/intro.css')}}" rel="stylesheet"/>
        <title>Laravel8</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="intro">
            <div class="text">
            <h1>Intro</h1>
            <p>One of you is a robot, you will have to discover who is. The robot knows all the answers. However, also knows how to cheat. It means that can lie. If you can not discover who is, the robot will get a code to kill your friend Samantha (Sam), who is a software developer, however you know she has been involved in  something  illegal.</p>
            </div>
            <div class="text1">
                <p class="back">Back</p>
            </div>
        </div>
        <script src="('/js/mission.js'"></script>
    </body>
    </html>
