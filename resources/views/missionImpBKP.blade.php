<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ secure_asset('css/missionImp.css') }}" rel="stylesheet" />
    <title>Laravel8</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
</head>
<body>
    <div class=" container-fluid  cover-contain">


            <div class="cont-temporizador time d-flex justify-content-center align-items-center">


                <h1></h1>
            </div>

        


        <div class="impostorTitle d-flex justify-content-center align-items-center">
            <h3>Elige al IMPOSTOR!</h3>
        </div>
        <div class="contain-select">

                <div class="">
                    <img class="selectCharacter" src="{{secure_asset('images/ch1.png') }}"/>
                    <p>The Outlier</p>
                </div>
                <div class="">
                    <img class="selectCharacter" src="{{secure_asset('images/ch2.png') }}"/>
                    <p>The Stronger</p>
                </div>
                <div class="">
                    <img class="selectCharacter" src="{{secure_asset('images/ch3.png') }}"/>
                    <p>The Rebel</p>
                </div>
                <div class="">
                    <img class="selectCharacter" src="{{secure_asset('images/ch4.png') }}"/>
                    <p>The Saviour</p>
                </div>
                <div class="">
                    <img class="selectCharacter" src="{{secure_asset('images/ch5.png') }}"/>
                    <p>The Diva</p>
                </div>
            </div>

    </div>
    <script src="{{secure_asset('js/missionImp.js')}}"></script>
</body>
</html>

