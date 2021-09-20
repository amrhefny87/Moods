
let minutos = 1;
let segundos = 0;



function cargarSegundo(){
    let txtSegundos;

    if(segundos < 0){
        segundos = 59;
    }


    if(segundos < 10){
        txtSegundos = `0${segundos}`;
    }else{
        txtSegundos = segundos;
    }
    document.getElementById('segundos').innerHTML = txtSegundos;
    segundos--;

    cargarMinutos(segundos);
}

function cargarMinutos(segundos){
    let txtMinutos;

    if(segundos == -1 && minutos !== 0){
        setTimeout(() =>{
            minutos--;
        },2)
    }else if(segundos == -1 && minutos == 0){
        setTimeout(() =>{
            minutos = 2;
        },1000)
    }


    if(minutos < 10){
        txtMinutos = `0${minutos}`;
    }else{
        txtMinutos = minutos;
    }
    document.getElementById('minutos').innerHTML = txtMinutos;
    (segundos,minutos);
}


function paraTiempo(){
clearInterval(cargarSegundo())
}



