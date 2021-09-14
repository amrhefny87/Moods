
let minutos = 2;
let segundos = 0;
cargarSegundo();


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
        },500)
    }


    if(minutos < 10){
        txtMinutos = `0${minutos}`;
    }else{
        txtMinutos = minutos;
    }
    document.getElementById('minutos').innerHTML = txtMinutos;
    cargarHoras(segundos,minutos);
}

//Definimos y ejecutamos las horas
function cargarminutos(segundos,minutos){
    let txtHoras;

    if(segundos == -1 && minutos == 0 && horas !== 0){
        setTimeout(() =>{
            horas--;
        },500)
    }else if(segundos == -1 && minutos == 0 && horas == 0){
       setTimeout(cargarMinutos,1000)
    }

    clearInterval();
}
/* window.setInterval(cargarSegundo,1000); */



