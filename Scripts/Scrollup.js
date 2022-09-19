
document.getElementById("Button-up").addEventListener("click",scrollup);

function scrollup(){

    var currentScroll = document.documentElement.scrollTop;

    if(currentScroll > 0){
        window.requestAnimationFrame(scrollup); //Animaction funtion
        window.scrollTo (0, currentScroll - (currentScroll / 5)); //Calculate Animation Speed
        buttonUp.style.transform = "scale(0)"; 
    }

}

buttonUp = document.getElementById("Button-up");

window.onscroll = function(){

    var scroll = document.documentElement.scrollTop;

    if (scroll > 1000){
        buttonUp.style.transform = "scale(1)";
    }else if(scroll < 1000){
        buttonUp.style.transform = "scale(0)";
    }

}
