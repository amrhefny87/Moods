<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="{{asset('css/map.css')}}" rel="stylesheet"/>
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
<div class="container-fluid cover-contain">
    <main class="main-center">
        <div  class="map-item item1">
            <button type="button"  class="fas fa-map-marker-alt">
                <img class="ch0" src="{{ asset('images/Frame1.png') }} "/>
            </button>
        </div>
        <div  class="map-item item2">
            <button type="button"  class="fas fa-map-marker-alt">
                <img class="ch0" src="{{ asset('images/Frame1.png') }} "/>
            </button>
        </div>
        <div  class="map-item item3">
            <button type="button"  class="fas fa-map-marker-alt">
                <img class="ch0" src="{{ asset('images/Frame1.png') }} "/>
            </button>
        </div>
        <div  class="map-item item4">
            <button type="button"  class="fas fa-map-marker-alt">
                <img class="ch0" src="{{ asset('images/Frame1.png') }} "/>
            </button>
        </div>
        <div  class="map-item item5">
            <button type="button"  class="fas fa-map-marker-alt">
                <img class="ch0" src="{{ asset('images/Frame1.png') }} "/>
            </button>
        </div>
        <div  class="map-item item6">
            <button type="button"  class="fas fa-map-marker-alt">
                <img class="ch0" src="{{ asset('images/Frame1.png') }} "/>
            </button>
        </div>
    </main>
    <footer class="footer">
        <div class="texto">
            <p>
                This is the map of the places we know your friend Sam use to
                visit, the<br />
                only hint we know at the first place is that she has been
                dealing with<br />
                illegal stuff about software,
            </p>
        </div>
    </footer>
</div>

<script src="{{asset('js/app.js')}}">
</script>
</body>
</html>