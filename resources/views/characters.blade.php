<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ asset('css/characters.css') }}" rel="stylesheet" />
    <title>Laravel8</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

    </style>
    button
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
</head>

<body class="containerCharacters" onload=" personSelect()">

    <div class="who-are-you container ">
        <img class="ch0" src="{{ asset('images/character0.jpg') }} " />
        <h2>Who are you?</h2>
    </div>


    <div class="container selection-characters " id="root">


    </div>




    <script>
        function selecteds(img, name, id, isInSall) {
            this.img = img,
                this.name = name,
                this.id = id,
                this.isInSall = isInSall

        };

        const selectP1 = new selecteds('images/ch1.png', 'foto1', 1, false);
        const selectP2 = new selecteds('images/ch1.png', 'foto2', 2, false);
        const selectP3 = new selecteds('images/ch1.png', 'foto3', 3, false);
        const selectP4 = new selecteds('images/ch1.png', 'foto4', 4, false);
        const selectP5 = new selecteds('images/ch1.png', 'foto5', 5, false)

        let selecItem = [];
        selecItem.push(selectP1, selectP2, selectP3, selectP4, selectP5);
       /*  localStorage.clear(); */
        localStorage.setItem('selecItem', selecItem);
        console.log(localStorage)

        function personSelect() {

            let listSelect = "";

            selecItem.forEach(person => {
                    if (!person.isInSall) {
                        listSelect +=
                            ` <div class="">
            <img class="selectCharacter" src="${person.img} "/>
            <p>${person.name}</p>
            <button onclick="selectOne(${person.id})">select</button>
        </div>`
                    }

                }

            )
            document.getElementById('root').innerHTML = listSelect;
        }

        var retrievedObject = localStorage.getItem('selecItem');

        function selectOne(id) {


            let index = selecItem.findIndex((item => item.id == id));
            console.log(index)
            if (selecItem[index].isInSall) {
                console.log('imposible add')
            } else {
                selecItem[index].isInSall = true;
                localStorage.setItem('selecItem', JSON.stringify(selecItem));
                listSelect = "";
                personSelect()

            }


        }

        function getValue() {
            return localStorage.getItem('selecItem');
        } // Gets the value of 'nameOfItem' and returns it
        /* console.log(getValue()); */ //'value';
    </script>
</body>

</html>
