
// Javascript/Gallerie

const fulImgBox = document.getElementById("fulImgBox"),
fulImg = document.getElementById("fulimg");


function openFulImg(reference){

    fulImgBox.style.display = "flex";
    fulImg.src = reference
}

function closeImg(){

    fulImgBox.style.display = "none";

}
