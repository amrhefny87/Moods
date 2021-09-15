
let minutos = 1;
let segundos = 0;
cargarSegundo();


function cargarSegundo(){
    let txtSegundos;

    if(segundos < 0){
        segundos = 59;


    }else if ( segundos = 0){

        clearInterval(segundos,);
    }


    if(segundos < 10){
        txtSegundos = `0${segundos}`;
    }else{
        txtSegundos = segundos;
    }
    document.getElementById('segundos').innerHTML = txtSegundos;
    segundos--;

    cargarSegondo(segundos);
}

function  cargarSegondo(segundos){
    let txtMinutos;

    if(segundos == -1 && minutos !== 0){
        setTimeout(() =>{
            minutos--;
        },1000)
    }else if(segundos == -1 && segundos == 0){

    }





    if(minutos < 10){
        txtMinutos = `0${minutos}`;
    }else{
        txtMinutos = minutos;
    }
    document.getElementById('minutos').innerHTML = txtMinutos;
    cargarMinutos(segundos,minutos);
}

//Definimos y ejecutamos las horas
function cargarTiempo(segundos,minutos){
    let txtMinutos;

    if(segundos == -1 && minutos == 0 ){
        setTimeout(() =>{
            minutos--;
        },500)
    }else if(segundos == -1 && minutos == 0 && segundos == 0 ){
        setTimeout(() =>{
            segundos = 0;
        },500)
    }


}

//Ejecutamos cada segundo



