


 
        
            setTimeout(() => {
                document.querySelector(".cover-contain div").classList.add("titleSmall");
                document.querySelector(".cover-contain div").classList.remove("titleBig");
                document.querySelector(".containerQuestions").style.opacity = "1";
                document.querySelector(".containerQuestions").style.visibility = "visible";
                document.querySelector(".selectCharacter").style.opacity = "1";
                document.querySelector(".buttonNext").style.opacity = "0.5";
            },2000);
        

     function   borderActive(event) {
            let divs = document.querySelectorAll(".containerQuestions div");
            for (let i = 0; i < divs.length; i++) {
                    divs[i].classList.remove("red");
                    document.querySelector(".buttonNext").style.opacity = "1";
            }
            event.path[1].classList.add("red");
        }


    function    nextQuestion() {
            let divs = document.querySelectorAll(".containerQuestions div");
            for (let i = 0; i < divs.length; i++) {
                    if(divs[i].classList.contains("red")) {
                        let result = divs[i].querySelector("p").innerHTML;  // este result es el texto selecionado
                        this.$router.push("/missionImp");
                    }
            }
        }

